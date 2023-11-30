<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Http\Controllers\Controller;
use App\Http\Requests\PhotosStoreRequest;
use App\Http\Requests\PhotosUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class PhotoController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        
        if ($user && $user->role === 'autor') {
            // Se o usuário for um autor, apenas os vídeos do autor serão recuperados
            $photos = Photo::where('user_id', $user->id)->latest()->paginate(12);
        } else {
            // Se o usuário não for um autor, todos os vídeos serão recuperados
            $photos = Photo::latest()->paginate(12);
        }

        return view('photos.index', compact('photos'));
    }

    public function create()   //CONTINUAR AQUI
    {
        // Adicione lógica aqui, se necessário
        return view('photos.create');
    }

    public function store(PhotosStoreRequest $request)
    {

        Photo::create([
            'user_id' => auth()->user()->id,
            'path' => $request->path,
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('photos.index')->with('success', 'Foto registrada com sucesso!');
    }

    
    public function edit(Photo $photo)
    {
        try{
            //$photo = Photo::findOrFail($photo->id); // Exibir o formulário de edição de uma foto existente
            return view('photos.edit', compact('photo'));
        } catch (ModelNotFoundException $e) {            
            return redirect('/photos')->with('error', 'Foto não encontrada.'); // Foto não encontrada, redirecione o usuário ou mostre uma mensagem de erro
        }
    }

    public function update(PhotosUpdateRequest $request, Photo $photo)
    {

        $photo->update([
            'path' => $request->path,
            'title' => $request->title,
            'description' => $request->description,
        ]);

        $photo->save();

        return redirect()->route('photos.index')->with('success', 'Foto atualizada com sucesso!');
    }

    public function destroy(Photo $photo)
    {

        try{
            $photo->delete();

            return redirect()->route('photos.index')->with('success', 'Foto removida com sucesso!');

        } catch (ModelNotFoundException $e) {
            return redirect('/photos')->with('error', 'Foto não encontrada.');
        }
        
    }
}

