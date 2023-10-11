<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        // Listar todos os usuários
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function show($id)
    {
        // Exibir informações de um usuário específico
        $user = User::findOrFail($id);
        return view('users.show', compact('user'));
    }

    public function edit($id)
    {
        // Exibir o formulário de edição de um usuário
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        // Atualizar informações de um usuário
        $user = User::findOrFail($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->role = $request->input('role');
        $user->save();

        return redirect('/users')->with('success', 'Informações do usuário atualizadas com sucesso.');
    }

    public function destroy($id)
    {
        // Excluir um usuário
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('/users')->with('success', 'Usuário excluído com sucesso.');
    }
}
