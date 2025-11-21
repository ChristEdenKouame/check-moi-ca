@extends('taches_view.app')

@section('titre', "Check-Moi-ca")

@section('contenu')

<div class="flex flex-col items-center justify-between mt-20 xl:px-25 xl:flex-row md:px-20 md:flex-row">
    <div class="flex flex-col items-center justify-center gap-5 xl:flex-row lg:flex-row lg:flex-start">
        {{-- Recherche de mot clé --}}
        <form action="{{route('searchById')}}" method="POST" class="inline-block">
            @csrf
            <input type="search" name="search" placeholder="Mot clé" class="w-64 px-3 py-1 font-semibold border border-gray-500 rounded-lg" value="{{old('search', $search ?? '')}}">
            <button type="submit" class="px-2 py-1 font-semibold border rounded-lg hover:cursor-pointer text-zinc-700 border-zinc-500 hover:text-zinc-50 hover:bg-zinc-700" >Rechercher</button>
        </form>
        <div class="flex gap-18 xl:gap-4 lg:gap-4 md:gap-15">
            {{-- Taches spécifiques --}}
            <a href="{{route('enCours')}}" class="font-semibold hover:text-yellow-500 whitespace-nowrap">En cours</a>
            <a href="{{route('termine')}}" class="font-semibold hover:text-green-600">Terminées</a>
            <a href="{{route('index')}}" class="font-semibold hover:text-sky-700">Toutes</a>
        </div>
    </div>

    <div>
        {{-- Lien vers formulaire de création de tache --}}
        <a 
            href="{{route('tache.create')}}" 
            class="flex px-2 py-1 text-white rounded-sm shadow-md bg-sky-700 whitespace-nowrap">
            <span class="material-symbols-outlined">add</span>
            Ajouter une tache
        </a>
    </div>
</div>

{{-- Affichage de message en fonction de l'action effectuée --}}
@if (session('message'))
    <div class="mt-3 text-xl mx-30">
        <p>{{session('message')}} {{session('tache')}}</p>
    </div>
@endif

{{-- Affichages de la liste des ressources --}}
<div class="flex justify-center mx-10 mt-3 text-center border rounded-sm shadow-lg xl:mx-25 md:mx-20 border-zinc-400">
    <table class="relative w-full">
        
        <thead class="border-b border-zinc-400 ">
            <tr>
                <th class="px-2 py-1 text-start">Titre</th>
                <th class="px-2 py-1 text-start">Description</th>
                <th class="px-2 text-center">Statut</th>
                <th class="px-2 text-center">Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($taches as $tache)
                <tr class="border-b border-zinc-400">
                <td class="px-2 py-1 text-start">{{$tache->titre}}</td>
                <td class="px-2 py-1 text-start">{{$tache->description}}</td>
                <td class="px-2 py-1">
                    @if ($tache->statut == 1)
                    <span class="px-1 text-green-200 bg-green-600 rounded-lg whitespace-nowrap">Terminée</span>
                    @else
                    <span class="px-1 text-yellow-100 bg-yellow-500 rounded-lg whitespace-nowrap">En cours</span>
                    @endif
                </td>
                
                {{-- Bontons d'actions --}}
                <td class="flex items-center justify-center gap-2 py-1 ">
                    
                    <a 
                        href="{{ route('tache.show', $tache->id) }}">
                        <span class="text-gray-600 material-symbols-outlined">visibility</span>
                    </a>
                    
                    <a 
                        href="{{route('tache.edit', $tache->id)}}" >
                        <span class="text-blue-600 material-symbols-outlined">edit_calendar</span>
                    </a>
                    
                    <form action="{{route('tache.destroy', $tache->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button 
                            type="submit" 
                            class="hover:cursor-pointer" 
                            onclick="return confirm('Voulez-vous vraiment supprimer la tache ?')">
                            <span class="text-red-600 material-symbols-outlined">delete</span>
                        </button>
                    </form>
                </td>
                
            </tr>
            @endforeach
            
        </tbody>

    </table>
</div>

@endsection