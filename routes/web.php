<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TacheController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

// Recherche d'une tache 
Route::post('/tache/searchById', [TaskController::class, 'searchById'])->name('searchById');

// Taches en cours
Route::get('/tache/enCours', [TaskController::class, 'current'])->name('enCours');

// Taches terminés
Route::get('/tache/termine', [TaskController::class, 'finished'])->name('termine');

// Taches
Route::get('/', [TaskController::class, 'index'])->name('index')->middleware('auth');
Route::resource('/tache', TaskController::class)->middleware('auth');

// Authentification
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login-post', [AuthController::class, 'login'])->name('login.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Inscription
Route::get('/sign-up', [RegisterController::class, 'index'])->name('sign-up');
Route::post('/sign-up/post', [RegisterController::class, 'signup'])->name('sign-up.post');


// //Affichage du formulaire de création (vue)
// Route::get('/tache/creer',[TacheController::class, 'create'])->name('creation');

// //Affichage de la tache à modifier à partir de l'ID (vue)
// Route::get('/tache/modifier/{id}', [TacheController::class, 'edit'])->name('modifier');

// //Modification d'une tache (boutton)
// Route::put('/tache/update/{id}', [TacheController::class, 'update'])->name('update');

// Route::delete('/tache/supprimer/{id}', [TacheController::class, 'destroy'])->name('supprimer');

// //Ajout d'une nouvelle tache (boutton)
// Route::post('/tache/creer-post', [TacheController::class, 'store'])->name('ajouter');