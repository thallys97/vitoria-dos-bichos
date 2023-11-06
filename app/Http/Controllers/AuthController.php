<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember'); // Verifique se o campo "remember" foi marcado

        // Recupere o usuário da tabela "users" com o mesmo e-mail
        $user = User::where('email', $credentials['email'])->first();

        if ($user && Hash::check($credentials['password'], $user->password)) {
            // Autenticação bem-sucedida
            Auth::login($user, $remember); // Autentique o usuário
            
            if ($user->role === 'admin') {
                return redirect()->route('dashboard.index');
            } else {
                return redirect()->route('posts.index');
            }
        }

        // Autenticação falhou
        return back()->withErrors([
            'email' => 'Credenciais inválidas.',
            'password' => 'Credenciais inválidas.',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
