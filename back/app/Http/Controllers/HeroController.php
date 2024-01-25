<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use App\Models\Race;
use App\Models\Skill;
use App\Models\Creator;
use App\Models\Category;
use App\Models\Alignment;
use App\Models\HeroSkill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // app/Http/Controllers/HeroController.php

    public function index(Request $request)
    {

        // Récupérez l'utilisateur en cours
        // $user = Auth::user();
        $heroes = Hero::with(['creator'])->get();
        // Passez l'utilisateur et les héros à la vue
        // return view('heroes.index', compact('heroes', 'user'));
        return response()->json($heroes);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'pseudo' => 'required|string',
        ]);

        $filename = "";
        if ($request->hasFile('image_url')) {
            // On récupère le nom du fichier avec son extension, résultat $filenameWithExt : "jeanmiche.jpg"
            $filenameWithExt = $request->file('image_url')->getClientOriginalName();

            $filenameWithExt = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // On récupère l'extension du fichier, résultat $extension : ".jpg"
            $extension = $request->file('image_url')->getClientOriginalExtension();
            // On créer un nouveau fichier avec le nom + une date + l'extension, résultat $filename :"jeanmiche_20220422.jpg"
            $filename = $filenameWithExt . '_' . time() . '.' . $extension;
            // On enregistre le fichier à la racine /storage/app/public/uploads, ici la méthode storeAs défini déjà le chemin/storage/app
            $request->file('image_url')->storeAs('public/uploads', $filename);
        } else {
            $filename = Null;
        }

        $hero = Hero::create(array_merge($request->all(), ['image_url' => $filename]));

        // Gestion des compétences associées au héros
        $hero->skills()->attach($request->input('skill_ids', []));


        return response()->json([
            'status' => 'Success',
            'data' => $hero,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $hero = Hero::findOrFail($id);

        return response()->json([
            'hero' => $hero,
            'skills' => $hero->skills,
        ]);
    }


    public function update(Request $request, Hero $hero)
    {
        $request->validate([
            'skill_ids' => [
                'array',
                'min:0',
                'max:3',
                function ($attribute, $value, $fail) use ($hero) {
                    if ($hero && count($value) > 3) {
                        $fail('Vous ne pouvez sélectionner que 3 compétences au maximum.');
                    }
                },
            ],
        ]);

        if (!$hero) {
            return Redirect::route('heroes')->with('error', 'Hero non trouvé');
        }

        if (count($request->input('skill_ids', [])) > 3) {
            return Redirect::back()->withInput()->with('error', 'Vous ne pouvez sélectionner que 3 compétences au maximum.');
        }

        // Vérifiez si un nouveau fichier image est téléchargé
        if ($request->hasFile('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filenameWithExt = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $filename = $filenameWithExt . '_' . time() . '.' . $extension;
            $request->file('image')->storeAs('public/uploads', $filename);

            // Supprimez l'ancien fichier image s'il existe
            if ($hero->image_url && Storage::exists('public/uploads/' . $hero->image_url)) {
                Storage::delete('public/uploads/' . $hero->image_url);
            }

            $hero->image_url = $filename;
        }

        $hero->pseudo = $request->pseudo;
        $hero->first_name = $request->first_name;
        $hero->last_name = $request->last_name;
        $hero->first_appearance = $request->first_appearance;
        $hero->history = $request->history;

        $hero->identite_connue = $request->has('identite_connue');

        $hero->creator_id = $request->creator_id;
        $hero->race_id = $request->race_id;
        $hero->category_id = $request->category_id;
        $hero->alignment_id = $request->alignment_id;

        $hero->skills()->sync([
            $request->primary_skill_id,
            $request->secondary_skill_id,
            $request->tertiary_skill_id,
        ]);

        $hero->save();

        return Redirect::route('heroes.index')->with('success', 'Le héros a été mis à jour avec succès !');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        HeroSkill::where('hero_id', $id)->delete();

        $hero = Hero::findOrFail($id);

        $hero->delete();

        return response()->json([
            'status' => 'success', 'Héro supprimé avec succès'
        ]);
    }

    // public function resetSkills($id)
    // {
    //     $hero = Hero::find($id);

    //     if (!$hero) {
    //         return redirect()->route('heroes.index')->with('error', 'Hero not found');
    //     }

    //     // Détachez toutes les compétences associées au héros
    //     $hero->skills()->detach();

    //     return redirect()->route('heroes.edit', $hero->id)->with('success', 'Compétences réinitialisées avec succès');
    // }

    // public function updateSkills(Request $request, $id)
    // {

    //     $request->validate([]);

    //     $hero = Hero::find($id);

    //     if (!$hero) {
    //         return redirect()->route('heroes.index')->with('error', 'Hero not found');
    //     }

    //     // Mettez à jour les compétences du héros
    //     $hero->skills()->sync($request->input('skill_ids', []));

    //     return redirect()->route('heroes.index')->with('success', 'Compétences mises à jour avec succès !');
    // }
}
