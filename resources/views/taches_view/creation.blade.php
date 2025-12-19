@extends('taches_view.app')

@section('titre', "Création d'une tache")

@section('contenu')

{{-- Formulaire de création d'une tache --}}
<div class="items-center justify-center px-10 py-3 mx-10 mt-20 border rounded-lg shadow-lg xl:mx-25 border-zinc-400">
    <form action="{{route('tache.store')}}" method="POST" >
        @csrf
        <h1 class="pb-2 text-2xl font-semibold text-red-800">
            Création d'une nouvelle tache
        </h1>

        <label for="titre">Titre de la tache</label>
        <input 
            type="text" 
            name="titre" 
            class="w-full px-3 py-2 mb-3 border border-gray-500 rounded-lg "
        >

        <label for="description">Description</label>
        <textarea 
            type="text"  
            name="description" 
            class="w-full px-3 py-2 border border-gray-500 rounded-lg ">
        </textarea>

        <input type="checkbox" name="statut">
        <label for="statut">Terminée ?</label>
        <br>

        <button 
            type="submit" 
            class="w-32 py-1 text-white bg-red-800 rounded-lg hover:cursor-pointer"
        >
            Ajouter
        </button>

        <a 
            href="{{ route('index') }}" 
            class="inline-block w-32 py-1 mt-4 text-center text-white bg-red-800 rounded-lg">
            Accueil
        </a>
    </form>
</div>

@endsection