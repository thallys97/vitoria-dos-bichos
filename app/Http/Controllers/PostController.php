<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        // Listar todos os posts
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function show($id)
    {
        // Exibir um post específico
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        // Exibir o formulário de criação de um novo post
        return view('posts.create');
    }

    public function store(Request $request)
    {
        // Salvar um novo post
        $post = new Post();
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->author_id = auth()->user()->id; // Associa o autor (pode variar dependendo da autenticação)
        $post->save();

        return redirect('/posts')->with('success', 'Post criado com sucesso.');
    }

    public function edit($id)
    {
        // Exibir o formulário de edição de um post existente
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        // Atualizar um post existente
        $post = Post::findOrFail($id);
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->save();

        return redirect('/posts')->with('success', 'Post atualizado com sucesso.');
    }

    public function destroy($id)
    {
        // Excluir um post
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect('/posts')->with('success', 'Post excluído com sucesso.');
    }
}
