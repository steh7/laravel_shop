<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProfileController; // Certifique-se de que o controlador de perfil existe
use Illuminate\Support\Facades\Route;

// Rota inicial
Route::get('/', function () {
    return view('welcome');
})->name('welcome'); // Nomeando a rota
;

// Rotas de Login (Para usuários não autenticados)
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::get('/login', [LoginController::class, 'index'])->name('login');

// Rotas de Registro
Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

// Rota de Perfil (Exige que o usuário esteja autenticado)
Route::get('/profile', [ProfileController::class, 'index'])->name('profile')->middleware('auth'); 

