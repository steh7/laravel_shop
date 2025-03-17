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
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Verifica se o email pertence ao admin
        $admin = User::where('email', env('ADMIN_EMAIL'))->first();

        if ($admin && Hash::check($request->password, $admin->password)) {
            Auth::login($admin);
            return redirect()->route('profile');
        }

        // Caso contrário, tenta fazer o login como usuário comum
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->intended(route('profile'));
        }

        return back()->withErrors([
            'email' => 'Credenciais inválidas.',
        ]);
    }

    // Realiza o logout do usuário
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
