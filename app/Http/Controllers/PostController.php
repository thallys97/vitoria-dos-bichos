<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Medium;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;

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
        try{
            $post = Post::findOrFail($id);  // Exibir um post específico
            return view('posts.show', compact('post'));
        } catch (ModelNotFoundException $e) {            
            return redirect('/posts')->with('error', 'Post não encontrado.');// Post não encontrado, redirecione o usuário ou mostre uma mensagem de erro
        }
    }

    public function create()
    {
        // Exibir o formulário de criação de um novo post
        return view('posts.create');
    }

    public function store(Request $request) //ERROR PARA RESOLVER DEPOIS: o problema é que não tem nenhum User autenticado no momento, por isso o id é nulo
    {

        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'media' => 'required|image|mimes:jpeg,png,gif|max:2048', // Define as regras para o upload da imagem
        ]);


        
        //  // Crie um usuário temporário para fins de teste
        // $user = new User();
        // $user->name = 'usuário teste 6';
        // $user->email = 'teste6@example.com';
        // $user->password = bcrypt('senha_de_teste6');
        // $user->save();

        // // Autentique o usuário temporário
        // Auth::login($user);



        // Salvar um novo post
        $post = new Post();
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->user_id = auth()->user()->id; // Associa o autor (pode variar dependendo da autenticação)
        $post->save();

            // Processar a mídia (imagem) se foi enviada
        if ($request->hasFile('media')) {
            $mediaPath = $request->file('media')->store('media', 'public');
            // Crie um novo registro de mídia associado ao post
            Medium::create([
                'post_id' => $post->id,
                'path' => $mediaPath,
            ]);
        }

        return redirect()->route('posts.show', $post->id)->with('success', 'Post criado com sucesso.');
    }

    public function edit($id)
    {
        try{
            $post = Post::findOrFail($id); // Exibir o formulário de edição de um post existente
            return view('posts.edit', compact('post'));
        } catch (ModelNotFoundException $e) {            
            return redirect('/posts')->with('error', 'Post não encontrado.'); // Post não encontrado, redirecione o usuário ou mostre uma mensagem de erro
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'media' => 'image|mimes:jpeg,png,gif|max:2048', // Se você permitir o upload de mídia
        ]);

        $post = Post::findOrFail($id);
        $post->title = $request->input('title');
        $post->content = $request->input('content');

        // Processar a mídia (imagem) se foi enviada
        if ($request->hasFile('media')) {
            $media = Medium::where('post_id', $post->id)->first();

            if ($media) {
                // Remover o registro de mídia existente associado ao post
                // Excluir o arquivo do storage
                $mediaPath = $media->path;
                Storage::disk('public')->delete($mediaPath);

                // Excluir o registro da mídia
                $media->delete();
            }

            $newMediaPath = $request->file('media')->store('media', 'public');
            // Crie um novo registro de mídia associado ao post
            Medium::create([
                'post_id' => $post->id,
                'path' => $newMediaPath,
            ]);
        }

        $post->save();

        return redirect()->route('posts.show', $post->id)->with('success', 'Post atualizado com sucesso.');
    }

    

    public function destroy($id)
    {
        try{

            $post = Post::findOrFail($id);

            // Verifique se há uma mídia associada ao post
            $media = Medium::where('post_id', $post->id)->first();

            if ($media) {
                // Exclua o arquivo de mídia do storage
                $mediaPath = $media->path;
                Storage::disk('public')->delete($mediaPath);

                // Exclua o registro de mídia
                $media->delete();
            }

            // Exclua o post
            $post->delete();

            return redirect('/posts')->with('success', 'Post e mídia excluídos com sucesso.');

        } catch (ModelNotFoundException $e) {            
            return redirect('/posts')->with('error', 'Post não encontrado.'); // Post não encontrado, redirecione o usuário ou mostre uma mensagem de erro
        }
    }

}
