<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Skill;
use App\Models\HeroSkill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $skills = Skill::all();

        // Construisez la requête en fonction des filtres



        return response()->json(['data' => $skills]);
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
            'name' => 'required',
        ]);

        $skills = Skill::create(array_merge($request->all(),));

        return response()->json([
            'status' => 'Skill ajouté avec succès !',
            'data' => $skills
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $skill = Skill::find($id);

        return response()->json(['data' => $skill]);
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
            'name' => 'required',
        ]);

        $skill = Skill::find($id);
        $skill->name = $request->name;
        $skill->save();

        return response()->json([
            'status' => 'Le pouvoir a été mis à jour avec succès !',
            'data' => $skill,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        HeroSkill::where('skill_id', $id)->delete();

        $skill = Skill::findOrFail($id);

        $skill->delete();

        return response()->json(['status' => 'success, Créateur supprimé avec succès']);
    }
}
