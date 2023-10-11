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
        return view('midias.create');
    }

    public function store(Request $request)
    {
        // Fazer upload de uma nova mídia
        $midia = new Medium();
        $midia->post_id = $request->input('post_id');

        // Manipular o arquivo de mídia
        if ($request->hasFile('caminho')) {
            $file = $request->file('caminho');
            $path = $file->store('midias', 'public');
            $midia->caminho = $path;
        }

        $midia->save();

        return redirect()->back()->with('success', 'Mídia adicionada com sucesso.');
    }

    public function destroy($id)
    {
        // Excluir uma mídia
        $midia = Medium::findOrFail($id);
        $midia->delete();

        return redirect()->back()->with('success', 'Mídia excluída com sucesso.');
    }
}
