@extends('taches_view.app')

@section('titre', "Check-Moi-ca")

@section('contenu')

<div class="flex flex-col items-center justify-between gap-2 px-2 mx-2 mt-20 lg:mx-5 lg:flex-row sm:flex-row ">
    <div class="flex flex-col justify-start gap-5 sm:flex-col md:items-start lg:items-center xl:flex-row lg:flex-row ">
        {{-- Recherche de mot clé --}}
        <form action="{{route('search')}}" method="POST" class="flex flex-col justify-center gap-2 lg:flex-row sm:flex-row">
            @csrf
            <input type="search" name="search" placeholder="Mot clé" class="w-64 px-3 py-1 font-semibold border border-gray-500 rounded-lg" value="{{old('search', $search ?? '')}}">
            <button type="submit" class="px-2 py-1 font-semibold duration-300 border rounded-lg hover:cursor-pointer border-zinc-500 hover:text-zinc-50 hover:bg-zinc-700" >Rechercher</button>
        </form>
        <div class="flex gap-2">
            {{-- Filtre des taches --}}
            <a href="{{route('enCours')}}" class="font-semibold hover:text-blue-400">En cours</a>
            <a href="{{route('termine')}}" class="font-semibold hover:text-blue-400">Terminées</a>
            <a href="{{route('index')}}" class="font-semibold hover:text-blue-400">Tous</a>
        </div>  
    </div>

    <div>
        {{-- Lien vers formulaire de création de tache --}}
        <a 
            href="{{route('tache.create')}}" 
            class="flex items-center px-2 py-1 text-white rounded-lg shadow-md bg-gray-800 whitespace-nowrap hover:scale-[1.01] duration-200">
            <span class="material-symbols-outlined">add</span>
            Ajouter une tache
        </a>
    </div>
</div>

{{-- Affichage de message en fonction de l'action effectuée --}}
@if (session('message'))

    <div class="mx-5 mt-3 text-lg">
        <p>{{session('message')}} {{session('tache')}}</p>
    </div>

@endif

@if (isset($taches_encours) and isset($total_taches))

    <div class="pt-5 mx-2 lg:mx-5 sm:mx-5">
        <span class="text-lg font-bold">{{$taches_encours}}</span> tache(s) en cours sur <span class="text-lg font-bold">{{$total_taches}}</span>
    </div>

@endif


{{-- Affichages de la liste des ressources --}}
<div class="flex justify-center mx-2 mt-3 overflow-x-auto text-xs text-center border rounded-sm shadow-lg lg:mx-5 border-zinc-400 sm:mx-5">
    <table class="relative w-full ">
        
        <thead class="border-b border-zinc-400 ">
            <tr>
                <th class="px-2 py-2 text-start">Titre</th>
                <th class="px-2 py-2 text-start">Description</th>
                <th class="px-2 py-2 text-center whitespace-nowrap">Date de Création</th>
                <th class="px-2 py-2 text-center whitespace-nowrap">Dead Line</th>
                <th class="px-2 py-2 text-center whitespace-nowrap">Priorité</th>
                <th class="px-2 text-center">Statut</th>
                <th class="px-2 text-center">Actions</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($taches as $tache)
                <tr class="border-b border-zinc-400">
                <td class="px-2 py-2 text-start">{{$tache->titre}}</td>
                <td class="px-2 py-2 text-start">{{$tache->description}}</td>
                <td class="px-2 py-2 text-center">{{$tache->created_at->format('d/m/Y')}}</td>
                <td class="px-2 py-2 text-center">{{$tache->deadline->format('d/m/Y')}}</td>
                <td class="px-2 py-2 text-center">
                    @if ($tache->priorite == 'urgente')
                        <span class="p-1 text-red-800 border rounded-lg">Urgente</span>
                    @elseif ($tache->priorite == 'moyenne')
                        <span class="p-1 text-yellow-500 border rounded-lg">Moyenne</span>
                    @elseif ($tache->priorite == 'faible')
                        <span class="p-1 text-green-500 border rounded-lg">Faible</span>
                    @endif
                </td>
                <td class="px-2 py-2 text-center">
                    @if ($tache->statut == 1)
                        <span class="p-1 border rounded-lg text-sky-500 whitespace-nowrap">Terminée</span>
                    @else
                        <span class="px-1 py-1 text-orange-500 border rounded-lg whitespace-nowrap">En cours</span>
                    @endif
                </td>
                
                {{-- Bontons d'actions --}}
                <td class="flex items-center justify-center gap-1 px-2 py-2 text-center">
                    
                    <a
                        href="{{ route('tache.show', $tache->id) }}">
                        <span class="material-symbols-outlined hover:text-blue-400">visibility</span>
                    </a>
                    
                    <a 
                        href="{{route('tache.edit', $tache->id)}}" >
                        <span class="material-symbols-outlined hover:text-blue-400">edit_calendar</span>
                    </a>
                    
                    <form action="{{route('tache.destroy', $tache->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button 
                            type="submit" 
                            class="hover:cursor-pointer hover:text-blue-400" 
                            onclick="return confirm('Voulez-vous vraiment supprimer le projet ?')">
                            <span class="material-symbols-outlined">delete</span>
                        </button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="10" class="py-2 text-center text-gray-400">
                    Aucune tache
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>

</div>


@endsection