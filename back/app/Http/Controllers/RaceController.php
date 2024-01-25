<?php

namespace App\Http\Controllers;

use App\Models\Race;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = $request->input('q');

        $races = Race::when(isset($query), function ($queryBuilder) use ($query) {
            $queryBuilder->where('name', 'like', '%' . $query . '%');
        })
        ->orderBy('name')
        ->get();

        $user = Auth::user();

        return view('races.index', compact('races', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('races.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
        ]);

        Race::create([
            'name' => $request->name,
        ]);

        return redirect()->route('races.index')
            ->with('success', 'Nouvelle race ajouté avec succès !');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $race = Race::findOrFail($id);

        return view('races.show', compact('race'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $race = Race::findOrFail($id);

        return view('races.edit', compact('race'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => $request->last_name,
        ]);

        $race = Race::find($id);
        $race->name = $request->name;

        return redirect()->route('races.index')->with('success', 'La race a été mis à jour avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $race = Race::findOrFail($id);
        $race->delete();
        return redirect('/races')->with('success', 'Race supprimé avec succès');
    }
}
