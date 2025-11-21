<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    @vite('resources/css/app.css')
    <title>@yield('titre', 'Connexion')</title>
</head>

<body class="flex flex-col items-center justify-center h-screen bg-blue-100 text-zinc-700">
<h1 class="text-xl text-center">Bienvenue sur <span class="text-3xl font-black">Check-Moi ça</span> <br>
Ici, gerez vos taches quotidiennes.</h1>

<div>
    <div class="px-4 py-3 mt-3 border rounded-lg shadow-lg border-zinc-400">
        <form action="{{route('login.post')}}" method="POST" class="flex flex-col ">
            @csrf
            <h2 class="pb-1 text-xl font-semibold text-center text-red-700">
                Connexion
            </h2>
            @if (session('error'))
                <div class="text-center">{{session('error')}}</div>
            @endif

            <label for="email">Email</label>
            <input type="email" name="email" class="w-64 px-3 py-1 mb-1 border border-gray-500 rounded-lg" value="{{old('email')}}">
            
            <label for="password">Mot de passe</label>
            <input type="password" name="password" class="w-64 px-3 py-1 mb-3 border border-gray-500 rounded-lg ">
            
            <button type="submit" class="self-center w-64 py-1 text-white bg-red-700 rounded-sm hover:cursor-pointer">
                Se connecter
            </button>

            <a href="{{route('sign-up')}}" class="mt-2 text-sm text-red-700">Pas encore de compte ?</a>
        </form>
    </div>
</div>
</body>
</html>