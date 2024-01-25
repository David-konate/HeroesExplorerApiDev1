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

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // app/Http/Controllers/HeroController.php

    public function index(Request $request)
    {

        // Récupérez les paramètres du filtre depuis l'URL
        $filterRaceId = $request->input('race_id');
        $filterCreatorId = $request->input('creator_id');
        $filterCategoryId = $request->input('category_id');


        // Construisez la requête en fonction des filtres
        $query = $request->input('q');

        $heroes = Hero::when(isset($query), function ($queryBuilder) use ($query) {
            $queryBuilder->where('pseudo', 'like', '%' . $query . '%')
                ->orWhere('last_name', 'like', '%' . $query . '%')
                ->orWhere('first_name', 'like', '%' . $query . '%');
        })
            // Ajoutez cette ligne pour trier par ordre alphabétique du pseudo
            ->orderBy('pseudo')
            ->get();


        // Récupérez l'utilisateur en cours
        $user = Auth::user();

        // Passez les créateurs, les races, l'utilisateur et les héros à la vue
        return view('heroes.index', compact('heroes', 'user'));
    }





    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $creators = Creator::all();
        $categories = Category::all();
        $alignments = Alignment::all();
        $races = Race::all();
        $skills = Skill::all();
        return view('heroes.create', compact('creators', 'categories', 'alignments', 'races', 'skills'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'pseudo' => 'required|string',
            'skill_ids' => [

                'array',
                'min:1',
                'max:3',
                function ($attribute, $value, $fail) {
                    if (count($value) > 3) {
                        $fail('Vous ne pouvez sélectionner que 3 compétences au maximum.');
                    }
                },
            ],
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

        $hero = Hero::create([
            'user_id' => Auth::id(),
            'pseudo' => $request->pseudo,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'first_appearance' => $request->first_appearance,
            'history' => $request->history,
            'image_url' => $filename,
            'identite_connue' => $request->has('identite_connue'),
            'creator_id' => $request->creator_id,
            'race_id' => $request->race_id,
            'category_id' => $request->category_id,
            'alignment_id' => $request->alignment_id,
            'image' => $filename,
        ]);

        // Gestion des compétences associées au héros
        $hero->skills()->attach($request->input('skill_ids', []));
        return redirect()->route('heroes.index')
            ->with('success', 'Héros ajouté avec succès !');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $hero = Hero::findOrFail($id);
        // $skills = $hero->skills;

        // return view('heroes.show', ['url' => url('heroes/' . $hero->pseudo), 'hero' => $hero, 'skills' => $skills]);

        $hero = Hero::where('pseudo', $hero->pseudo)->firstOrFail();
        $url = url('/heroes/' . $hero->pseudo);

        // Utilisez la méthode redirect() pour rediriger vers l'URL générée
        // return redirect($url)->with(['hero' => $hero, 'skills' => $hero->skills]);
        return view('heroes.show', ['url' => $url, 'hero' => $hero, 'skills' => $hero->skills]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $hero = Hero::findOrFail($id);
        $categories = Category::orderBy('name', 'asc')->get();
        $creators = Creator::orderBy('last_name', 'asc')->orderBy('first_name', 'asc')->get();
        $alignments = Alignment::orderBy('name', 'asc')->get();
        $races = Race::orderBy('name', 'asc')->get();
        $skills = Skill::orderBy('name', 'asc')->get();


        return view('heroes.edit', compact(['hero', 'skills', 'categories', 'creators', 'alignments', 'races']));
    }

    /**
     * Update the specified resource in storage., '
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'skill_ids' => [
                'array',
                'min:0',
                'max:3',
                function ($attribute, $value, $fail) use ($id) {
                    $hero = Hero::find($id);
                    if ($hero && count($value) > 3) {
                        $fail('Vous ne pouvez sélectionner que 3 compétences au maximum.');
                    }
                },
            ],
        ]);

        $hero = Hero::find($id);

        if (!$hero) {
            return redirect()->route('heros.index')->with('error', 'hero non trouvé');
        }

        if (count($request->input('skill_ids', [])) > 3) {
            return redirect()->back()->withInput()->with('error', 'Vous ne pouvez sélectionner que 3 compétences au maximum.');
        }


        // Vérifiez si un nouveau fichier image est téléchargé
        if ($request->hasFile('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filenameWithExt = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $filename = $filenameWithExt . '_' . time() . '.' . $extension;
            $request->file('image')->storeAs('public/uploads', $filename);

            // id a la place du nom de la phot dorigine

            // Supprimez l'ancien fichier image s'il existe
            if ($hero->image && Storage::exists('public/uploads/' . $hero->image)) {
                Storage::delete('public/uploads/' . $hero->image);
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

        return redirect()->route('heroes.index')->with('success', 'Le hero a été mis à jour avec succès !');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        HeroSkill::where('hero_id', $id)->delete();

        $hero = Hero::findOrFail($id);
        $hero->delete();
        return redirect('/heroes')->with('success', 'Héro supprimé avec succès');
    }

    public function resetSkills($id)
    {
        $hero = Hero::find($id);

        if (!$hero) {
            return redirect()->route('heroes.index')->with('error', 'Hero not found');
        }

        // Détachez toutes les compétences associées au héros
        $hero->skills()->detach();

        return redirect()->route('heroes.edit', $hero->id)->with('success', 'Compétences réinitialisées avec succès');
    }

    public function updateSkills(Request $request, $id)
    {

        $request->validate([

        ]);

        $hero = Hero::find($id);

        if (!$hero) {
            return redirect()->route('heroes.index')->with('error', 'Hero not found');
        }

        // Mettez à jour les compétences du héros
        $hero->skills()->sync($request->input('skill_ids', []));

        return redirect()->route('heroes.index')->with('success', 'Compétences mises à jour avec succès !');
    }
}
