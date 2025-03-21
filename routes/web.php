<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

// Rota inicial
Route::get('/', function () {
    return view('welcome');
});

// // Rotas de Login (Para usuários não autenticados)
// Route::middleware('guest')->group(function () {
//     Route::get('/login', function () {
//         return view('auth.login');
//     })->name('login'); 

// });

    Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

