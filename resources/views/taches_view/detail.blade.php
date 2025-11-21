@extends('taches_view.app')

@section('titre', "Details de la tache")

@section('contenu')
{{-- Afficage des informations d'un élément --}}
<div class="mx-40 mt-20 ">
    <h2 class="mb-4 text-2xl font-bold">Détails de la tâche</h2>
    <p><strong>Titre :</strong> {{ $tache->titre }}</p>
    <p><strong>Description :</strong> {{ $tache->description }}</p>
    <p><strong>Statut :</strong> 
        @if ($tache->statut)
            <span class="px-1 text-green-200 bg-green-600 rounded-lg whitespace-nowrap">Terminée</span>
        @else
            <span class="px-1 text-yellow-100 bg-yellow-500 rounded-lg whitespace-nowrap ">En cours</span>
        @endif
    </p>
    <a 
        href="{{ route('tache.edit', $tache->id) }}" 
        class="inline-block w-32 py-1 mt-4 font-semibold text-center text-white bg-red-600 rounded">
        Modifier
    </a>
    <a 
        href="{{ route('index') }}"     
        class="inline-block w-32 py-1 mt-4 font-semibold text-center text-white rounded bg-sky-700">
        Accueil
    </a>
</div>

@endsection