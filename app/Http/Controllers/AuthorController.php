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
        return view('authors.create');
    }

    public function store(Request $request)
    {
        // Criar um novo autor
        $author = new Author();
        $author->user_id = $request->input('user_id');
        $author->full_name = $request->input('full_name');
        $author->save();

        return redirect()->back()->with('success', 'Autor adicionado com sucesso.');
    }

    public function show($id)
    {
        // Exibir informações de um autor específico
        $author = Author::findOrFail($id);
        return view('authors.show', compact('author'));
    }

    public function edit($id)
    {
        // Exibir o formulário de edição de um autor
        $author = Author::findOrFail($id);
        return view('authors.edit', compact('author'));
    }

    public function update(Request $request, $id)
    {
        // Atualizar informações de um autor
        $author = Author::findOrFail($id);
        $author->full_name = $request->input('full_name');
        $author->save();

        return redirect()->back()->with('success', 'Informações do autor atualizadas com sucesso.');
    }

    public function destroy($id)
    {
        // Excluir um autor
        $author = Author::findOrFail($id);
        $author->delete();

        return redirect('/authors')->with('success', 'Autor excluído com sucesso.');
    }
}
