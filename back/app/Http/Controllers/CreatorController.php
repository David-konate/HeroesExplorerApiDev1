<?php

namespace App\Http\Controllers;

use App\Models\Creator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CreatorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        // Construisez la requête en fonction des filtres
        $query = $request->input('q');

        $creators = Creator::when(isset($query), function ($queryBuilder) use ($query) {
            $queryBuilder->where('pseudo', 'like', '%' . $query . '%')
                ->orWhere('last_name', 'like', '%' . $query . '%')
                ->orWhere('first_name', 'like', '%' . $query . '%');
        })
        // Ajoutez cette ligne pour trier par ordre alphabétique du pseudo
        ->orderBy('last_name')
        ->get();

        $user = Auth::user();

        return view('creators.index', compact('creators', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('creators.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',


        ]);

        Creator::create([
            'first_name' => $request->last_name,
            'last_name' => $request->first_name,
            'date_de_naissance' => $request->date_de_naissance,
            'date_de_deces' => $request->date_de_deces,
            'content' => $request->content,
        ]);

        // dd($request);

        return redirect()->route('creators.index')
            ->with('success', 'Créateur ajouté avec succès !');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $creator = Creator::findOrFail($id);
        return view('creators.show', compact('creator'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $creator = Creator::findOrFail($id);

        return view('creators.edit', compact(['creator']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([


        ]);

        $creator = Creator::find($id);
        if ($request->hasFile('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filenameWithExt = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $filename = $filenameWithExt . '_' . time() . '.' . $extension;
            $request->file('image')->storeAs('public/uploads', $filename);

            // id a la place du nom de la phot dorigine
            // if ($request->has('image')) {
            //     $fileName = uniqid() . '.' . $request->image->extension();
            //     $request->image->storeAs('public/heroes', $fileName);
            // }

            // Supprimez l'ancien fichier image s'il existe
            if ($creator->image && Storage::exists('public/uploads/' . $creator->image)) {
                Storage::delete('public/uploads/' . $creator->image);
            }

            $creator->image_url = $filename;
        }


        $creator->last_name = $request->last_name;
        $creator->first_name = $request->first_name;
        $creator->date_de_naissance = $request->date_de_naissance;
        $creator->date_de_deces = $request->date_de_deces;
        $creator->content = $request->content;

        $creator->save();

        return redirect()->route('creators.index')->with('success', 'L\'auteur a été mis à jour avec succès !');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $creator = Creator::findOrFail($id);
        $creator->delete();
        return redirect('/creators')->with('success', 'Auteur supprimé avec succès');
    }


}
