<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    @vite('resources/css/app.css')
    <title>@yield('titre', 'Accueil')</title>
</head>

<body class="flex flex-col items-center justify-center bg-blue-100 text-zinc-800">
    <div class="fixed top-0 flex justify-between w-full px-5 py-4 mx-10 bg-blue-200 shadow-md">

        {{-- Nom de l'application --}}
        <div class="text-xl font-black xl:text-2xl lg:text-2xl md:text-2xl">Check-Moi ça</div>

        {{-- bouton déconnexion --}}
        <div class="flex gap-5 ">
            {{-- Bouton déconnexion --}}
            <a 
                href="{{route('login')}}" 
                class="px-2 py-1 font-semibold text-red-700 duration-200 rounded-sm"
            >
                Se connecter
            </a>
            <a 
                href="{{route('sign-up')}}" 
                class="px-2 py-1 font-semibold text-white bg-red-700 rounded-sm shadow-md"
            >
                Créer un compte
            </a>
        </div>
    </div>

    <section class="flex flex-col items-center justify-center min-h-screen mx-10">
        <h1 class="text-5xl font-bold text-center lg:text-7xl">
            Organisez vos tâches avec <br>
            <span class="text-sky-700">simplicité</span> et <span class="text-sky-700">efficacité</span>
        </h1>
        <p class="pt-10 text-xl text-center text-zinc-500">
            Check moi ça transforme la gestion de vos tâches en une expérience <br>
            fluide et intuitive. Créez, triez, organisez et accomplissez plus, sans effort.
        </p>
        <a 
            href="{{route('login')}}" 
            class="px-2 py-2 mt-20 text-xl font-semibold text-white duration-300 bg-red-700 rounded-lg shadow-xl hover:scale-[1.01]"
            >
            Commencer maintenant
        </a>
    </section>
    
    <section class="flex items-center justify-center mx-10" >
        <div class="grid grid-cols-1 gap-10 py-10 lg:grid-cols-3 sm:grid-cols-2">
            <div class="flex flex-col items-center justify-center gap-3 px-15 py-8 text-center border border-sky-700/20 rounded-2xl hover:scale-[1.01] hover:shadow-2xl duration-200 hover:border-sky-700/30 ">
            <span class="p-2 text-red-500 bg-red-200 rounded-lg material-symbols-outlined">checklist</span>
            <span class="text-xl font-bold whitespace-nowrap">Gestion complète</span>
            <p class="text-zinc-700">
                Créez, modifiez et supprimez <br>
                de manière simple
            </p>
        </div>
        <div class="flex flex-col items-center justify-center gap-3 px-15 py-8 text-center border border-sky-700/20 rounded-2xl hover:scale-[1.01] hover:shadow-2xl duration-200 hover:border-sky-700/30 ">
            <span class="p-2 text-red-500 bg-red-200 rounded-lg material-symbols-outlined">filter_alt</span>
            <span class="text-xl font-bold whitespace-nowrap">Filtre intelligent</span>
            <p class="text-zinc-700">
                Filtrez et recherchez <br>
                vos tâches en un clic
            </p>
        </div>
        <div class="flex flex-col items-center justify-center gap-3 px-15 py-8 text-center border border-sky-700/20 rounded-2xl hover:scale-[1.01] hover:shadow-2xl duration-200 hover:border-sky-700/30 ">
            <span class="p-2 text-red-500 bg-red-200 rounded-lg material-symbols-outlined">mindfulness</span>
            <span class="text-xl font-bold whitespace-nowrap">Interface épurée</span>
            <p class="text-zinc-700">
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