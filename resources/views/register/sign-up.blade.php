<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@200..900&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <title>@yield('titre', 'Inscription')</title>
</head>

<body class="flex flex-col items-center justify-center h-screen bg-black text-zinc-100 font-['Unbounded'] text-sm">
<h1 class="text-center ">Bienvenue sur <span class="text-2xl font-black">Check-Moi ça</span> <br>
Ici, gerez vos taches quotidiennes.</h1>
<div class="px-6 py-6 mt-3 border border-red-800 rounded-lg shadow-lg w-90">
    <form action="{{route('sign-up.post')}}" method="POST" class="flex flex-col ">
        @csrf
        <h1 class="pb-2 text-xl font-semibold text-center">
            Inscription
        </h1>

        @error('email')
            <div class="text-center">{{$message}}</div>
        @enderror

        <label for="name">Nom et prénom</label>
        <input type="text" name="name" class="w-full px-3 py-2 mb-1 border border-gray-500 rounded-lg" placeholder="John Doe">
        
        <label for="email">Email</label>
        <input type="email" name="email" class="w-full px-3 py-2 mb-1 border border-gray-500 rounded-lg" value="{{old('email')}}">
        
        <label for="password">Mot de passe</label>
        <input type="password" name="password" class="w-full px-3 py-2 mb-3 border border-gray-500 rounded-lg ">
        
        <button type="submit" class="self-center w-full py-2 text-white bg-red-800 rounded-sm hover:cursor-pointer">
            S'inscrire
        </button>
            <a href="{{route('login')}}" class="mt-2 text-sm text-red-800">J'ai déja un compte</a>

    </form>
</div>
</body>
</html>