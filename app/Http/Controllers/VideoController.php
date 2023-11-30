<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Http\Controllers\Controller;
use App\Http\Requests\VideosStoreRequest;
use App\Http\Requests\VideosUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class VideoController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        
        if ($user && $user->role === 'autor') {
            // Se o usuário for um autor, apenas os vídeos do autor serão recuperados
            $videos = Video::where('user_id', $user->id)->latest()->paginate(12);
        } else {
            // Se o usuário não for um autor, todos os vídeos serão recuperados
            $videos = Video::latest()->paginate(12);
        }

        return view('videos.index', compact('videos'));
    }

    public function create()   //CONTINUAR AQUI
    {
        // Adicione lógica aqui, se necessário
        return view('videos.create');
    }

    public function store(VideosStoreRequest $request)
    {

        Video::create([
            'user_id' => auth()->user()->id,
            'path' => $request->path,
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('videos.index')->with('success', 'Vídeo registrado com sucesso!');
    }

    
    public function edit(Video $video)
    {
        try{
            //$video = Video::findOrFail($video->id); // Exibir o formulário de edição de um vídeo existente
            return view('videos.edit', compact('video'));
        } catch (ModelNotFoundException $e) {            
            return redirect('/videos')->with('error', 'Vídeo não encontrado.'); // Vídeo não encontrado, redirecione o usuário ou mostre uma mensagem de erro
        }
    }

    public function update(VideosUpdateRequest $request, Video $video)
    {

        $video->update([
            'path' => $request->path,
            'title' => $request->title,
            'description' => $request->description,
        ]);

        $video->save();

        return redirect()->route('videos.index')->with('success', 'Vídeo atualizado com sucesso!');
    }

    public function destroy(Video $video)
    {

        try{
            $video->delete();

            return redirect()->route('videos.index')->with('success', 'Vídeo removido com sucesso!');

        } catch (ModelNotFoundException $e) {
            return redirect('/videos')->with('error', 'Vídeo nao encontrado.');
        }
        
    }
}
