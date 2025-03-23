<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        // Você pode passar dados do usuário para a view, se necessário
        return view('auth.profile');
    }
}
