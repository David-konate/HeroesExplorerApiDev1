<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Skill;
use App\Models\HeroSkill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $skills = Skill::orderBy('name', 'asc')->get();

        // Construisez la requête en fonction des filtres
        $query = $request->input('q');

        $skills = Skill::when(isset($query), function ($queryBuilder) use ($query) {
            $queryBuilder->where('name', 'like', '%' . $query . '%');
        })->get();

        $user = Auth::user();


        return view('skills.index', compact('skills', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('skills.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
        ]);

        Skill::create([
            'name' => $request->name
        ]);

        return redirect()->route('skills.index')
            ->with('success', 'Skill ajouté avec succès !');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $skill = Skill::find($id);

        return view('skill.show', ['url' => url('skills/' . $skill->name), 'skill' => $skill]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $skill = Skill::findOrFail($id);

        return view('skills.edit', compact('skill'));
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

        return redirect()->route('skills.index')->with('success', 'Le pouvoir a été mis à jour avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        HeroSkill::where('skill_id', $id)->delete();

        $skill = Skill::findOrFail($id);
        $skill->delete();
        return redirect('/skills')->with('success', 'Skill supprimé avec succès');
    }
}
