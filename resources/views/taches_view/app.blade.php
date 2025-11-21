<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    @vite('resources/css/app.css')
    <title>@yield('titre', 'Mon App')</title>
</head>

<body class="bg-blue-100 text-zinc-700 ">
    {{-- Top bar  --}}
    <div class="absolute top-0 flex justify-between w-full px-5 py-3 mx-0 bg-blue-200 shadow-md">

        {{-- Nom de l'application --}}
        <div class="text-xl font-black xl:text-2xl">Check-Moi ça</div>

        {{-- bouton déconnexion --}}
        <div class="flex items-center self-center gap-4 ">
            <div class="text-xl font-bold">
                @auth
                    {{Auth::user()->name}}
                @endauth
            </div>
            {{-- Bouton déconnexion --}}
            <a 
                href="{{route('logout')}}" 
                class="flex gap-1 px-2 py-1 text-white bg-red-700 rounded-sm shadow-md"
            >
                <span class="material-symbols-outlined">logout</span>
                Déconnexion
            </a>
        </div>
    </div>
    
    {{-- Contenu de la page --}}
    @yield('contenu')
</body>
</html>