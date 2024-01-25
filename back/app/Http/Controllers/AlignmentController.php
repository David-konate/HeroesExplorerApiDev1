<?php

namespace App\Http\Controllers;

use App\Models\Alignment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alignments = Alignment::orderBy('name', 'asc')->get();

        $user = Auth::user();

        return view('alignments.index', compact('alignments', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('alignments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
        ]);

        Alignment::create([
            'name' => $request->name,
        ]);

        return redirect()->route('alignments.index')
            ->with('success', 'Alignement ajouté avec succès !');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $alignment = Alignment::findOrFail($id);
        $alignment->delete();
        return redirect('/alignments')->with('success', 'Alignement supprimé avec succès');
    }
}
