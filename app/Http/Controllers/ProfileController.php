<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Exibe a página de perfil do usuário.
     */
    public function index()
    {
        return view('profile'); // Retorna a view de perfil
    }
}
