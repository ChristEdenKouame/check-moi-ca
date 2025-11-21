<?php

namespace App\Http\Controllers;

use App\Models\Tache;
use Illuminate\Http\Request;

class TacheController extends Controller
{
    //Affichage de la page d'accueil taches 
    public function index()
    {
        $taches = Tache::all();
        return view('taches_view.index', compact('taches'));
    }

    //Affichage du formilaire de création de tache
    public function create()
    {
        return view('taches_view.creation');
    }

    //Création d'une tache
    public function store(Request $request)
    {

        // Validation des informations
        $request->validate([
            'titre' => 'string|max:200|required',
            'description' => 'string|max:500|required'
        ]);

        // Insertion dans de la tache la table Tache
        Tache::create([
            'titre' => $request->titre,
            'description' => $request->description,
            'statut' => $request->statut == "on" ? 1 : 0
        ]);

        return redirect()->route('index');
    }

    //Affichage de la vue : tache à modifier a partir de l'ID
    public function edit(int $id)
    {
        $tache = Tache::where('id', $id)->first();
        return view('taches_view.modification', compact('tache'));
    }

    //Boutton modifier des taches
    public function update(Request $request, int $id)
    {

        // Validation des informations
        $request->validate([
            'titre' => 'string|max:200|required',
            'description' => 'string|max:500|required'
        ]);

        // Modification de la tache
        $tache = Tache::where('id', $id)->first();

        $tache->update([
            'titre' => $request->titre,
            'description' => $request->description,
            'statut' => $request->statut == "on" ? 1 : 0
        ]);

        return redirect()->route('index');
    }

    public function destroy(int $id)
    {
        Tache::where('id', $id)->delete();

        return redirect()->route('index');
    }
}
