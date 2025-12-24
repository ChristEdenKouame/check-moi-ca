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
        <input 
            type="text" 
            name="titre" 
            class="w-full px-3 py-2 mb-3 border border-gray-500 rounded-lg" 
            value="{{old('titre', $tache->titre)}}"
        >
        
        <label for="description">Description</label>
        <textarea 
            type="text"  
            name="description" 
            class="w-full px-3 py-2 border border-gray-500 rounded-lg ">{{old('description',$tache->description)}}
        </textarea>

        <div class="flex flex-col gap-1 pt-2">
            <label for="priorite" >Priorité</label>
            <select name="priorite" class="w-full px-3 py-2 border border-gray-500 rounded-lg">
                <option value="faible" class="bg-black" {{ old('priorite', $tache->priorite) == 'faible' ? 'selected' : '' }}>Faible</option>
                <option value="moyenne" class="bg-black" {{ old('priorite', $tache->priorite) == 'moyenne' ? 'selected' : '' }}>Moyenne</option>
                <option value="urgente" class="bg-black" {{ old('priorite', $tache->priorite) == 'urgente' ? 'selected' : '' }}>Urgente</option>
            </select>
        </div>
        
        <div class="flex flex-col gap-1 pt-2">
            <label for="deadline">Date limite</label>
            <input 
                    type="date" 
                    name="deadline" 
                    value="{{old('deadline', $tache->deadline)->format('Y-m-d')}}"
                    class="w-full px-3 py-2 mb-3 border border-gray-500 rounded-lg "
            >
        </div>
        
        <input type="checkbox" name="statut">
        <label for="statut">Terminée ?</label>
        <br>

        <button type="submit" class="w-32 py-1 text-white bg-red-800 rounded-lg cursor-pointer ">
            Modifier
        </button>
        
        <a 
            href="{{ route('index') }}" 
            class="inline-block w-32 py-1 mt-4 text-center text-white bg-red-800 rounded-lg">
            Retour
        </a>
    </form>
</div>

@endsection