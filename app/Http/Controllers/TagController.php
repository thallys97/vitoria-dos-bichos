<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    public function index()
    {
        // Listar todas as tags
        $tags = Tag::all();
        return view('tags.index', compact('tags'));
    }

    public function show($id)
    {
        // Exibir uma tag específica e os posts associados a ela
        $tag = Tag::findOrFail($id);
        return view('tags.show', compact('tag'));
    }

    public function create()
    {
        // Exibir o formulário de criação de uma nova tag
        return view('tags.create');
    }

    public function store(Request $request)
    {
        // Salvar uma nova tag
        $tag = new Tag;
        $tag->name = $request->input('name');
        $tag->save();

        return redirect('/tags')->with('success', 'Tag criada com sucesso.');
    }

    public function edit($id)
    {
        // Exibir o formulário de edição de uma tag existente
        $tag = Tag::findOrFail($id);
        return view('tags.edit', compact('tag'));
    }

    public function update(Request $request, $id)
    {
        // Atualizar uma tag existente
        $tag = Tag::findOrFail($id);
        $tag->name = $request->input('name');
        $tag->save();

        return redirect('/tags')->with('success', 'Tag atualizada com sucesso.');
    }

    public function destroy($id)
    {
        // Excluir uma tag
        $tag = Tag::findOrFail($id);
        $tag->delete();

        return redirect('/tags')->with('success', 'Tag excluída com sucesso.');
    }
}
