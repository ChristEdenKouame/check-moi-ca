<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    @vite('resources/css/app.css')
    <title>@yield('titre', 'Inscription')</title>
</head>

<body class="flex flex-col items-center justify-center h-screen bg-blue-100 text-zinc-700">
<h1 class="text-xl text-center">Inscrivez-vous <span class="text-3xl font-black">maintenant.</span></h1>
<div class="px-4 py-3 mt-3 border rounded-lg shadow-lg max-w-80 border-zinc-400">
    <form action="{{route('sign-up.post')}}" method="POST" class="flex flex-col ">
        @csrf
        <h1 class="pb-2 text-xl font-semibold text-center text-red-700">
            Inscription
        </h1>

        @error('email')
            <div class="text-center">{{$message}}</div>
        @enderror

        <label for="name">Nom et prénom</label>
        <input type="text" name="name" class="w-64 px-3 py-1 mb-1 border border-gray-500 rounded-lg">
        
        <label for="email">Email</label>
        <input type="email" name="email" class="w-64 px-3 py-1 mb-1 border border-gray-500 rounded-lg" value="{{old('email')}}">
        
        <label for="password">Mot de passe</label>
        <input type="password" name="password" class="w-64 px-3 py-1 mb-3 border border-gray-500 rounded-lg ">
        
        <button type="submit" class="self-center w-64 py-1 text-white bg-red-700 rounded-sm hover:cursor-pointer">
            S'inscrire
        </button>
    </form>
</div>
</body>
</html>