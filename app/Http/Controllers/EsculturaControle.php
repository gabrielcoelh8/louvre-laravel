<?php

namespace App\Http\Controllers;

use App\Models\Escultura;
use App\Models\Artista;
use App\Http\Requests\EsculturaRequest;
use Illuminate\Support\Facades\Storage;

class EsculturaControle extends Controller
{
    function listar() {
        $esculturas = Escultura::orderByRaw('id_artista, id')->get();
        return view('listagemEscultura',
                    compact('esculturas'));
       }
    
       function novo() {
         $escultura = new Escultura();
         $escultura->id = 0;
         $artistas = Artista::orderBy('nome')->get();
         return view('frmEscultura', compact('escultura', 'artistas'));
       }
    
       function salvar(EsculturaRequest $request) {
         if ($request->input('id') == 0) {
            $escultura = new Escultura();
          } else {
            $escultura = Escultura::find($request->input('id'));
          }
          if ($request->hasFile('url_imagem')) {
              $file = $request->file('url_imagem');
              $upload = $file->store('public/upload/esculturas');
              $upload = explode("/", $upload);
              $tamanho = sizeof($upload);
              if ($escultura->url_imagem != "") {
                Storage::delete("public/upload/esculturas/".$escultura->url_imagem);
              }
              $escultura->url_imagem = $upload[$tamanho-1];
          }
     
            $escultura->nome = $request->input('nome');
            $escultura->material = $request->input('material');
            $escultura->descricao = $request->input('descricao');
            $escultura->ano_lancamento = $request->input('ano_lancamento');
            $escultura->id_artista = $request->input('id_artista');
            $escultura->save();
            return redirect('escultura/listar')->with(['msg' => "A escultura '$escultura->nome' foi salva!"]);
       }
    
       function editar($id) {
         $escultura = Escultura::find($id);
         $artistas = Artista::orderBy('nome')->get();
         return view('frmEscultura', compact('escultura', 'artistas'));
       }
    
       function excluir($id) {
         $escultura = Escultura::find($id);
         $escultura->delete();
         if ($escultura->url_imagem != "") {
          Storage::delete("public/upload/esculturas/".$escultura->url_imagem);
        }
        
         return redirect('escultura/listar')->with(['msg' => "A escultura '$escultura->nome' foi apagada!"]);
       }
}
