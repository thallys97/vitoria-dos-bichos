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
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function show($id)
    {
        // Exibir uma categoria específica e seus posts associados
        $category = Category::findOrFail($id);
        return view('categories.show', compact('category'));
    }

    public function create()
    {
        // Exibir o formulário de criação de uma nova categoria
        return view('categories.create');
    }

    public function store(Request $request)
    {
        // Salvar uma nova categoria
        $category = new Category();
        $category->name = $request->input('name');
        $category->save();

        return redirect('/categories')->with('success', 'Categoria criada com sucesso.');
    }

    public function edit($id)
    {
        // Exibir o formulário de edição de uma categoria existente
        $category = Category::findOrFail($id);
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        // Atualizar uma categoria existente
        $category = Category::findOrFail($id);
        $category->name = $request->input('name');
        $category->save();

        return redirect('/categories')->with('success', 'Categoria atualizada com sucesso.');
    }

    public function destroy($id)
    {
        // Excluir uma categoria
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect('/categories')->with('success', 'Categoria excluída com sucesso.');
    }
}
