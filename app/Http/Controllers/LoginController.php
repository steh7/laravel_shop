<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    // Exibe o formulário de login
    public function index()
    {
        return view('auth.login');
    }

    // Processa o login do usuário
    public function login(Request $request)
    {
       $user = User::where('email', $request->email)->first();
       
       if(!$user) {
           return redirect()->back()->with('message', 'E-mail não encontrado');
        }

        if(!Hash::check($request->password, $user->password)) {
            return redirect()->back()->with('message', 'Senha incorreta, tente novamente');
        };

        Auth::loginUsingId($user->id);

        // Redireciona para a página de perfil do usuário
        return redirect()->route('profile')->with('message', 'Login bem-sucedido, bem-vindo ao seu perfil!');
    }

    // Realiza o logout do usuário
    public function logout()
    {
        Auth::logout();
        return redirect('/logout')->with('message', 'Você saiu da conta.');
    }
}