<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();

        return response()->json(['data' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);

        return response()->json(['data' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $heroes = Hero::orderBy('pseudo', 'asc')->get();
        $request->validate([
            'pseudo' => 'required|max:40',

        ]);

        $user = User::find($id);
        // dd($request);
        if (!$user) {
            return redirect()->route('heroes.index')->with('error', 'Post non trouvé');
        }

        // Vérifiez si un nouveau fichier image est téléchargé
        if ($request->hasFile('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filenameWithExt = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $filename = $filenameWithExt . '_' . time() . '.' . $extension;
            $request->file('image')->storeAs('public/uploads', $filename);

            // Supprimez l'ancien fichier image s'il existe
            if ($user->image && Storage::exists('public/uploads/' . $user->image)) {
                Storage::delete('public/uploads/' . $user->image);
            }

            $user->image = $filename;
        }
        $user->pseudo = $request->pseudo;
        //sauvegarde les changements en bdd
        $user->save();

        //on redirige sur la page precedente
        return response()->json([
            'status' => 'Le compte a été mis à jour avec succès !',
            'data' => $user,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        if (Auth::user()->id == $user->id) {
            $user->delete();
            return redirect()->route('heroes.index')->with('message', 'Le héro a bien été supprimé');
        } else {
            return redirect()->back()->withErrors(['erreur' => 'suppression du héro']);
        }
    }
}
