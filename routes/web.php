<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PasswordResetController;
use App\Http\Controllers\EmailVerificationController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Rota inicial
Route::get('/', function () {
    return view('welcome');
});

// Rotas de Login (Para usuários não autenticados)
Route::middleware('guest')->group(function () {
    Route::get('/login', function () {
        return view('auth.login');
    })->name('login'); 

    Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
});

// Rotas de Registro (Para usuários não autenticados)
Route::middleware('guest')->group(function () {
    Route::get('/register', function () {
        return view('auth.register');
    })->name('register');

    Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');
});

// Rotas de Redefinição de Senha
Route::controller(PasswordResetController::class)->group(function () {
    Route::get('/forgot-password', 'index')->name('password.request');
    Route::post('/forgot-password', 'sendResetLink')->name('password.email');
    Route::get('/reset-password/{token}', 'showResetForm')->name('password.reset');
    Route::post('/reset-password', 'reset')->name('password.update');
});

// Rotas de Verificação de E-mail
Route::controller(EmailVerificationController::class)->group(function () {
    Route::get('/email/verify', 'index')->name('verification.notice');
    Route::get('/email/verify/{id}/{hash}', 'verify')->name('verification.verify');
    Route::post('/email/resend', 'resend')->name('verification.resend');
});

// Rotas protegidas (Apenas usuários autenticados)
Route::middleware('auth')->group(function () {
    // Perfil do usuário
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

    // Produtos
    Route::controller(ProductController::class)->group(function () {
        Route::get('/products', 'index')->name('products.index');
        Route::get('/products/create', 'create')->name('products.create');
        Route::post('/products', 'store')->name('products.store');
        Route::get('/products/{product}', 'show')->name('products.show');
        Route::get('/products/{product}/edit', 'edit')->name('products.edit');
        Route::put('/products/{product}', 'update')->name('products.update');
        Route::delete('/products/{product}', 'destroy')->name('products.destroy');
    });

    // Logout
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    // Página inicial autenticada
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
