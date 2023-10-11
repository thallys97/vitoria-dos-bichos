<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        // Listar todas as categorias
        $categorias = Category::all();
        return view('categorias.index', compact('categorias'));
    }

    public function show($id)
    {
        // Exibir uma categoria específica e seus posts associados
        $categoria = Category::findOrFail($id);
        return view('categorias.show', compact('categoria'));
    }

    public function create()
    {
        // Exibir o formulário de criação de uma nova categoria
        return view('categorias.create');
    }

    public function store(Request $request)
    {
        // Salvar uma nova categoria
        $categoria = new Category();
        $categoria->nome = $request->input('nome');
        $categoria->save();

        return redirect('/categorias')->with('success', 'Categoria criada com sucesso.');
    }

    public function edit($id)
    {
        // Exibir o formulário de edição de uma categoria existente
        $categoria = Category::findOrFail($id);
        return view('categorias.edit', compact('categoria'));
    }

    public function update(Request $request, $id)
    {
        // Atualizar uma categoria existente
        $categoria = Category::findOrFail($id);
        $categoria->nome = $request->input('nome');
        $categoria->save();

        return redirect('/categorias')->with('success', 'Categoria atualizada com sucesso.');
    }

    public function destroy($id)
    {
        // Excluir uma categoria
        $categoria = Category::findOrFail($id);
        $categoria->delete();

        return redirect('/categorias')->with('success', 'Categoria excluída com sucesso.');
    }
}
