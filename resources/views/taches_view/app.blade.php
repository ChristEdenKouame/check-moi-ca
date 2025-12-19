<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Gruppo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@200..900&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <title>@yield('titre', 'Mon App')</title>
</head>

<body class="bg-black text-zinc-100 font-['Unbounded'] text-sm">
    {{-- Top bar  --}}
    <div class="absolute top-0 flex items-center justify-between w-full px-2 py-3 bg-red-800 shadow-md lg:px-5 sm:px-5">

        {{-- Nom de l'application --}}
        <div class="text-base font-bold lg:text-xl whitespace-nowrap sm:text-xl">VOODOO-Check</div>

        {{-- bouton déconnexion --}}
        <div class="flex items-center self-center gap-4 ">
            <div class="text-base lg:text-lg sm:text-lg">
                @auth
                    {{Auth::user()->name}}
                @endauth
            </div>
            {{-- Bouton déconnexion --}}
            <a 
                href="{{route('logout')}}" 
                class="flex items-center gap-1 px-2 py-1 text-white bg-red-700 rounded-lg shadow-md"
            >
                <span class="material-symbols-outlined">logout</span>
                <span class="hidden sm:block lg:block">Déconnexion</span>
            </a>
        </div>
    </div>
    
    {{-- Contenu de la page --}}
    @yield('contenu')
</body>
</html>