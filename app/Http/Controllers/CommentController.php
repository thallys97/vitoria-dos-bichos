<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;

class ComentarioController extends Controller
{
    public function store(Request $request)
    {
        // Salvar um novo comentário
        $comentario = new Comment();
        $comentario->post_id = $request->input('post_id');
        $comentario->nome = $request->input('nome');
        $comentario->email = $request->input('email');
        $comentario->conteudo = $request->input('conteudo');
        $comentario->save();

        return redirect()->back()->with('success', 'Comentário adicionado com sucesso.');
    }

    public function edit($id)
    {
        // Exibir o formulário de edição de um comentário existente
        $comentario = Comment::findOrFail($id);
        return view('comentarios.edit', compact('comentario'));
    }

    public function update(Request $request, $id)
    {
        // Atualizar um comentário existente
        $comentario = Comment::findOrFail($id);
        $comentario->conteudo = $request->input('conteudo');
        $comentario->save();

        return redirect('/posts/'.$comentario->post_id)->with('success', 'Comentário atualizado com sucesso.');
    }

    public function destroy($id)
    {
        // Excluir um comentário
        $comentario = Comment::findOrFail($id);
        $postId = $comentario->post_id;
        $comentario->delete();

        return redirect('/posts/'.$postId)->with('success', 'Comentário excluído com sucesso.');
    }
}

