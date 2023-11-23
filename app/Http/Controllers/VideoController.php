<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::all();
        return view('videos.index', compact('videos'));
    }

    public function create()
    {
        // Adicione lógica aqui, se necessário
        return view('videos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'path' => 'required|string',
            'title' => 'nullable|string',
            'description' => 'nullable|string',
        ]);

        Video::create($request->all());

        return redirect()->route('videos.index')->with('success', 'Vídeo criado com sucesso!');
    }

    
    public function edit(Video $video)
    {
        // Adicione lógica aqui, se necessário
        return view('videos.edit', compact('video'));
    }

    public function update(Request $request, Video $video)
    {
        $request->validate([
            'path' => 'required|string',
            'title' => 'nullable|string',
            'description' => 'nullable|string',
        ]);

        $video->update($request->all());

        return redirect()->route('videos.index')->with('success', 'Vídeo atualizado com sucesso!');
    }

    public function destroy(Video $video)
    {
        $video->delete();

        return redirect()->route('videos.index')->with('success', 'Vídeo removido com sucesso!');
    }
}
