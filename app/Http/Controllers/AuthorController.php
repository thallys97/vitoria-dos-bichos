<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Author;


class AuthorController extends Controller
{
    public function create()
    {
        // Exibir o formulário para adicionar um novo autor
        return view('autores.create');
    }

    public function store(Request $request)
    {
        // Criar um novo autor
        $autor = new Author();
        $autor->user_id = $request->input('user_id');
        $autor->nome_completo = $request->input('nome_completo');
        $autor->save();

        return redirect()->back()->with('success', 'Autor adicionado com sucesso.');
    }

    public function show($id)
    {
        // Exibir informações de um autor específico
        $autor = Author::findOrFail($id);
        return view('autores.show', compact('autor'));
    }

    public function edit($id)
    {
        // Exibir o formulário de edição de um autor
        $autor = Author::findOrFail($id);
        return view('autores.edit', compact('autor'));
    }

    public function update(Request $request, $id)
    {
        // Atualizar informações de um autor
        $autor = Author::findOrFail($id);
        $autor->nome_completo = $request->input('nome_completo');
        $autor->save();

        return redirect()->back()->with('success', 'Informações do autor atualizadas com sucesso.');
    }

    public function destroy($id)
    {
        // Excluir um autor
        $autor = Author::findOrFail($id);
        $autor->delete();

        return redirect('/autores')->with('success', 'Autor excluído com sucesso.');
    }
}
