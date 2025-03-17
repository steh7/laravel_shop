<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password as FacadesPassword;
use App\Models\User;

class PasswordResetController extends Controller
{
    // Exibe o formulário de solicitação de recuperação de senha
    public function showResetForm()
    {
        return view('auth.passwords.email');
    }

    // Envia o link de recuperação de senha para o e-mail
    public function sendResetLinkEmail(Request $request)
    {
        // Validação do e-mail
        $request->validate(['email' => 'required|email|exists:users,email']);

        // Envia o link de recuperação
        $status = FacadesPassword::sendResetLink(
            $request->only('email')
        );

        // Mensagem de status de envio
        return $status == Password::RESET_LINK_SENT
            ? back()->with('status', __($status))
            : back()->withErrors(['email' => __($status)]);
    }

    // Processa a atualização da senha
    public function reset(Request $request)
    {
        // Validação dos campos
        $request->validate([
            'token' => 'required',
            'email' => 'required|email|exists:users,email',
            'password' => 'required|confirmed|min:6',
        ]);

        // Tenta resetar a senha com o token fornecido
        $status = FacadesPassword::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user) use ($request) {
                $user->forceFill([
                    'password' => Hash::make($request->password),
                ])->save();

                // Evento de reset de senha
                event(new PasswordReset($user));
            }
        );

        // Mensagem de sucesso ou falha
        return $status == Password::PASSWORD_RESET
            ? redirect()->route('login')->with('status', 'Senha alterada com sucesso!')
            : back()->withErrors(['email' => [__($status)]]);
    }
}
