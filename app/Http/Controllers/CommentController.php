<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        // Salvar um novo comentário
        $comment = new Comment();
        $comment->post_id = $request->input('post_id');
        $comment->name = $request->input('name');
        $comment->email = $request->input('email');
        $comment->content = $request->input('content');
        $comment->save();

        return redirect()->back()->with('success', 'Comentário adicionado com sucesso.');
    }

    public function edit($id)
    {
        // Exibir o formulário de edição de um comentário existente
        $comment = Comment::findOrFail($id);
        return view('comments.edit', compact('comment'));
    }

    public function update(Request $request, $id)
    {
        // Atualizar um comentário existente
        $comment = Comment::findOrFail($id);
        $comment->content = $request->input('content');
        $comment->save();

        return redirect('/posts/'.$comment->post_id)->with('success', 'Comentário atualizado com sucesso.');
    }

    public function destroy($id)
    {
        // Excluir um comentário
        $comment = Comment::findOrFail($id);
        $postId = $comment->post_id;
        $comment->delete();

        return redirect('/posts/'.$postId)->with('success', 'Comentário excluído com sucesso.');
    }
}

