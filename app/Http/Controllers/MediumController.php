<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Medium;

class MediumController extends Controller
{
    public function create()
    {
        // Exibir o formulário de upload de mídia
        return view('media.create');
    }

    public function store(Request $request)
    {
        // Fazer upload de uma nova mídia
        $medium = new Medium();
        $medium->post_id = $request->input('post_id');

        // Manipular o arquivo de mídia
        if ($request->hasFile('path')) {
            $file = $request->file('path');
            $path = $file->store('media', 'public');
            $medium->path = $path;
        }

        $medium->save();

        return redirect()->back()->with('success', 'Mídia adicionada com sucesso.');
    }

    public function destroy($id)
    {
        // Excluir uma mídia
        $medium = Medium::findOrFail($id);
        $medium->delete();

        return redirect()->back()->with('success', 'Mídia excluída com sucesso.');
    }
}
