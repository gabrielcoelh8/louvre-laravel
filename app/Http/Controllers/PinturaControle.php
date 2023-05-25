<?php

namespace App\Http\Controllers;

use App\Models\Pintura;
use App\Models\Artista;
use App\Http\Requests\PinturaRequest;
use Illuminate\Support\Facades\Storage;

class PinturaControle extends Controller
{
    function listar() {
    $pinturas = Pintura::orderByRaw('id_artista, id')->get();
    return view('listagemPintura',
                compact('pinturas'));
   }

   function novo() {
     $pintura = new Pintura();
     $pintura->id = 0;
     $artistas = Artista::orderBy('nome')->get();
     return view('frmPintura', compact('pintura', 'artistas'));
   }

   function salvar(PinturaRequest $request) {
     if ($request->input('id') == 0) {
        $pintura = new Pintura();
      } else {
        $pintura = Pintura::find($request->input('id'));
      }
      if ($request->hasFile('url_imagem')) {
          $file = $request->file('url_imagem');
          $upload = $file->store('public/upload/pinturas');
          $upload = explode("/", $upload);
          $tamanho = sizeof($upload);
          if ($pintura->url_imagem != "") {
            Storage::delete("public/upload/pinturas/".$pintura->url_imagem);
          }
          $pintura->url_imagem = $upload[$tamanho-1];
      }
 
        $pintura->nome = $request->input('nome');
        $pintura->tecnica = $request->input('tecnica');
        $pintura->ano_lancamento = $request->input('ano_lancamento');
        $pintura->id_artista = $request->input('id_artista');
        $pintura->save();

        return redirect('pintura/listar')->with(['msg' => "A pintura '$pintura->nome' foi salva!"]);
   }

   function editar($id) {
     $pintura = Pintura::find($id);
     $artistas = Artista::orderBy('nome')->get();

     return view('frmPintura', compact('pintura', 'artistas'));
   }

   function excluir($id) {
     $pintura = Pintura::find($id);
     if ($pintura->url_imagem != "") {
      Storage::delete("public/upload/pinturas/".$pintura->url_imagem);
    }
     $pintura->delete();

     return redirect('pintura/listar')->with(['msg' => "A pintura '$pintura->nome' foi apagada!"]);
   }
}
