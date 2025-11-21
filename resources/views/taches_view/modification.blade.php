@extends('taches_view.app')

@section('titre', "Modification d'une tache")

@section('contenu')

{{-- Formulaire de Modification d'une tache --}}
<div class="items-center justify-center px-5 py-3 mx-40 mt-20 border rounded-lg shadow-lg border-zinc-400">
    <form action="{{route('tache.update', $tache->id)}}" method="POST">
        @csrf
        @method('PUT')
        <h1 class="pb-2 text-2xl font-semibold text-red-700">
            Modification d'une tache
        </h1>

        <label for="titre">Titre</label>
        <input type="text" placeholder="Manger du Garba" name="titre" class="w-full px-3 py-2 mb-3 border border-gray-500 rounded-lg" value="{{old('titre', $tache->titre)}}">
        
        <label for="description">Description</label>
        <textarea type="text"  name="description" class="w-full px-3 py-2 border border-gray-500 rounded-lg ">{{old('description',$tache->description)}}</textarea>

        <input type="checkbox" {{ $tache->statut ? 'checked' : ""}} name="statut">
        <label for="statut">Terminée ?</label>
        <br>

        <button type="submit" class="w-32 py-1 font-semibold text-white bg-red-700 rounded-sm cursor-pointer hover:">
            Modifier
        </button>
        
        <a 
            href="{{ route('index') }}" 
            class="inline-block w-32 py-1 mt-4 font-semibold text-center text-white rounded bg-sky-700">
            Retour
        </a>
    </form>
</div>

@endsection