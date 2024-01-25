<?php

namespace App\Http\Controllers;

use App\Models\Race;
use Illuminate\Http\Request;

class RaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $races = Race::all();

        return response()->json(['data' => $races]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
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

        $race = Race::create(array_merge($request->all(),));

        return response()->json([
            'status' => 'Nouvelle race ajouté avec succès !',
            'data' => $race
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $race = Race::findOrFail($id);

        return response()->json(['data' => $race]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
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

        return response()->json([
            'status' => 'Le pouvoir a été mis à jour avec succès !',
            'data' => $race,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $race = Race::findOrFail($id);

        $race->delete();

        return response()->json(['status' => 'success, Race supprimé avec succès']);
    }
}
