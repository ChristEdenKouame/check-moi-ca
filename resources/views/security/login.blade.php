<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@200..900&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <title>@yield('titre', 'Connexion')</title>
</head>

<body class="flex flex-col items-center justify-center h-screen bg-blue-100  font-['Unbounded']">
<h1 class="text-center ">Connectez-vous à votre <span class="text-2xl font-black">compte</span> <br>via le formulaire si dessous.</h1>

<div>
    <div class="px-6 py-6 mt-3 text-sm border border-blue-400 rounded-lg shadow-lg w-90">
        <form action="{{route('login.post')}}" method="POST" class="flex flex-col ">
            @csrf
            <h2 class="pb-1 text-xl font-semibold text-center ">
                Connexion
            </h2>
            @if (session('error'))
                <div class="text-center">{{session('error')}}</div>
            @endif

            <label for="email">Email</label>
            <input type="email" name="email" class="w-full px-3 py-2 mb-1 border border-gray-500 rounded-lg" value="{{old('email')}}">
            
            <label for="password">Mot de passe</label>
            <input type="password" name="password" class="w-full px-3 py-2 mb-3 border border-gray-500 rounded-lg ">
            
            <button type="submit" class="self-center w-full py-2 text-white bg-gray-900 rounded-lg hover:cursor-pointer">
                Se connecter
            </button>

            <a href="{{route('sign-up')}}" class="mt-2 text-sm text-gray-500">Pas encore de compte ?</a>
        </form>
    </div>
</div>
</body>
</html>