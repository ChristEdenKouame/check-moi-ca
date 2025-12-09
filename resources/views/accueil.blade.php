<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Gruppo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Saira:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&family=Saira:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@200..900&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <title>@yield('titre', 'Accueil')</title>
</head>

<body class="flex flex-col items-center justify-center bg-black text-zinc-100 font-['Unbounded'] text-sm">

    {{-- Top bar --}}
    <div class="fixed top-0 flex items-center justify-between w-full px-5 py-3 mx-5 text-sm bg-red-800 shadow-md lg:mx-10">

        {{-- Nom de l'application --}}
        <div class="text-xl font-bold whitespace-nowrap">VOODOO-Check</div>

        {{-- Bouton déconnexion --}}
        <div class="flex items-center gap-2 lg:gap-4">
            {{-- Bouton déconnexion --}}
            <a 
                href="{{route('login')}}" 
                class="flex items-center gap-2 px-2 py-2 text-base lg:text:lg whitespace-nowrap"
            >
                <span class="material-symbols-outlined">account_circle</span>
                <span class="hidden sm:block lg:block">Se connecter</span>
            </a>
            <a 
                href="{{route('sign-up')}}" 
                class="flex items-center gap-2 px-2 py-2 text-white bg-red-700 rounded-lg shadow-md whitespace-nowrap"
            >
                <span class="material-symbols-outlined">person_add</span>
                <span class="hidden sm:block lg:block">Créer un compte</span>
            </a>
        </div>
    </div>

    {{-- Header --}}
    <section class="flex flex-col items-center justify-center min-h-screen pt-20 mx-10">
        <h1 class="text-5xl font-bold text-center lg:text-6xl">
            Organisez vos projets<br> avec 
            <span class="text-red-800">simplicité</span> et <span class="text-red-800">efficacité</span>
        </h1>
        <p class="pt-10 text-xl text-center ">
            <span class="font-bold">Check-Moi ça</span> transforme la gestion de vos projets en une expérience <br>
            fluide et intuitive. Créez, triez et accomplissez plus, sans effort.
        </p>
        <img src="{{asset('images/fleche.png')}}" alt="" width="45px" class="relative mt-20 animate-bounce -z-20">
        <a 
            href="{{route('login')}}"
            class="px-2 mt-2 py-2 text-sm  text-white duration-200 bg-red-800 rounded-lg hover:shadow-2xl hover:scale-[1.01]"
            >
            Commencez maintenant !
        </a>
    </section>
    
    {{-- Cartes --}}
    <section class="flex items-center justify-center mx-10" >
        
        <div class="grid grid-cols-1 gap-10 py-10 lg:grid-cols-3 sm:grid-cols-2">
            <div class="flex flex-col items-center justify-center gap-3 px-15 py-8 text-center border border-zinc-100 rounded-2xl hover:scale-[1.01] hover:shadow-2xl duration-200 ">
                <span class="p-2 text-red-800 bg-red-300 rounded-lg material-symbols-outlined">checklist</span>
                <span class="text-xl font-bold whitespace-nowrap">Gestion complète</span>
                <p class="">
                    Créez, modifiez et supprimez <br>
                    de manière simple
                </p>
            </div>
            
            <div class="flex flex-col items-center justify-center gap-3 px-15 py-8 text-center border border-zinc-100 rounded-2xl hover:scale-[1.01] hover:shadow-2xl duration-200 ">
                <span class="p-2 text-red-800 bg-red-300 rounded-lg material-symbols-outlined">filter_alt</span>
                <span class="text-xl font-bold whitespace-nowrap">Filtre intelligent</span>
                <p class="">
                    Filtrez et recherchez <br>
                    vos projets en un clic
                </p>
            </div>
            
            <div class="flex flex-col items-center justify-center gap-3 px-15 py-8 text-center border border-zinc-100 rounded-2xl hover:scale-[1.01] hover:shadow-2xl duration-200 ">
                <span class="p-2 text-red-800 bg-red-300 rounded-lg material-symbols-outlined">mindfulness</span>
                <span class="text-xl font-bold whitespace-nowrap">Interface épurée</span>
                <p class="">
                    Design minimaliste pour <br>
                    une concentration maximale
                </p>
            </div>
        </div>
        
    </section>

    <footer class="mt-40 mb-2">
        <p>© 2025 Kouamé Christ Eden. Tous droits réservés.</p>
    </footer>
</body>
</html>