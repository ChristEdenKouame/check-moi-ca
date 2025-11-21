<?php

namespace App\Http\Controllers;

use App\Http\Requests\TacheRequest;
use App\Models\Tache;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $taches = Auth::user()->taches;  
        $taches = Tache::where('user_id', Auth::id())->get();
        return view('taches_view.index', compact('taches'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('taches_view.creation');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TacheRequest $request)
    {

        //Validation des informations du formulaire
        $request->validated();

        Auth::user()->taches()->create([
            'titre' => $request->titre,
            'description' => $request->description,
            'statut' => $request->statut == "on" ? 1 : 0
        ]);

        return redirect()->route('index')->with([
            'message' => 'Tache enregistrée : ',
            'tache' => $request->titre
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tache $tache)
    {
        return view('taches_view.modification', compact('tache'));
    }

    public function show(Tache $tache)
    {
        return view('taches_view.detail', compact('tache'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TacheRequest $request, Tache $tache)
    {
        $request->validated();

        $tache->update([
            'titre' => $request->titre,
            'description' => $request->description,
            'statut' => $request->statut == "on" ? 1 : 0
        ]);

        return redirect()->route('index')->with([
            'message' => 'Tache modifiée : ',
            'tache' => $tache->titre
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tache $tache)
    {
        $tache->delete();

        return redirect()->route('index')->with([
            'message' => 'Tache supprimée : ',
            'tache' => $tache->titre
        ]);
    }

    /**
     * Search a resource from storage.
     */

    public function searchById(Request $request)
    {
        $search = $request->search;
        if (!$search) {
            $taches = collect();
        } else {
            $taches = Tache::where('user_id', Auth::id())
                ->where(function ($query) use ($search) {
                    $query->where('titre', 'LIKE', '%' . $search . '%')
                        ->orWhere('description', 'LIKE', '%' . $search . '%');
                })->get();
        }

        return view('taches_view.index', compact('taches', 'search'));
    }

    /**
     * Display sinised tasks.
     */
    public function finished()
    {
        $taches = Tache::where('user_id', Auth::id())
            ->where('statut', 1)
            ->get();

        return view('taches_view.index', compact('taches'));
    }
    /**
     * Display current tasks.
     */
    public function current()
    {
        $taches = Tache::where('user_id', Auth::id())
            ->where('statut', 0)
            ->get();

        return view('taches_view.index', compact('taches'));
    }
}
