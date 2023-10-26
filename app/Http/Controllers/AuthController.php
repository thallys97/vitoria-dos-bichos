<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember'); // Verifica se o campo "remember" foi marcado

        if (Auth::attempt($credentials, $remember)) {
            // Autenticação bem-sucedida
            return redirect()->route('dashboard.index');
        }

        // Autenticação falhou
        return back()->withErrors(['email' => 'Credenciais inválidas.']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
