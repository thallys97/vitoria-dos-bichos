<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\UsersStoreRequest;
use App\Http\Requests\UsersUpdateRequest;
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

    public function create()
    {
        return view('users.create'); // Exibir o formulário de criação de usuário
    }

    public function store(UsersStoreRequest $request)
    {

        // Remova espaços iniciais e finais do campo phone, se eles existirem
        $phone = trim($request->input('phone'));

        // Criação do usuário
        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->role = $request->input('role');
        $user->phone = $phone; 

        $user->save();

        return redirect('/users')->with('success', 'Usuário criado com sucesso.');
    }

    public function edit($id)
    {
        // Exibir o formulário de edição de um usuário
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    public function update(UsersUpdateRequest $request, $id)
    {

        // Remova espaços iniciais e finais do campo phone, se eles existirem
        $phone = trim($request->input('phone'));

        $user = User::findOrFail($id); // Atualizar informações de um usuário
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->role = $request->input('role');
        $user->phone = $phone; // Adicione essa linha para atualizar o número de telefone
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
