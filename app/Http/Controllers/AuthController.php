<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Affichage du formulaire de connexion
    public function index()
    {
        return view('security.login');
    }

    // Vérification des informations
    public function login(LoginRequest $request)
    {
        // Vérification de la validité des informations
        $credentials = $request->validated();

        // Validation de la connexion
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return to_route('index');
        } else {
            return back()->with(['error' => ' Vérifiez vos informations'])->onlyInput('email');
        }
    }

    // Déconnexion
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
