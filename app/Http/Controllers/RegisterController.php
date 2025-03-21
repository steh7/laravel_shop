<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    // Exibe o formulário de registro
    public function index()
    {
        return view('auth.register');
    }

    // Processa o registro do usuário
    public function store(Request $request)
    {
        // Criação do novo usuário
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Redireciona para a página inicial ou área restrita
        return redirect()->back()->with('message', 'CRIADO COM SUÇEÇO');
    }
}
