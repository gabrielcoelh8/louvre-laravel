<?php

namespace App\Http\Controllers;

use App\Models\Artista;
use App\Http\Requests\ArtistaRequest;
use Illuminate\Support\Facades\Storage;

class ArtistaControle extends Controller
{
    function listar() {
        $artistas = Artista::orderByRaw('nome, id')->get();
        return view('listagemArtista',
                    compact('artistas'));
       }

       function novo() {
         $artista = new Artista();
         $artista->id = 0;

         return view('frmArtista', compact('artista'));
       }
    
       function salvar(ArtistaRequest $request) {
         if ($request->input('id') == 0) {
            $artista = new Artista();
          } else {
            $artista = Artista::find($request->input('id'));
          }
          if ($request->hasFile('url_imagem')) {
              $file = $request->file('url_imagem');
              $upload = $file->store('public/upload/artistas');
              $upload = explode("/", $upload);
              $tamanho = sizeof($upload);
              if ($artista->url_imagem != "") {
                Storage::delete("public/upload/artistas/".$artista->url_imagem);
              }
              $artista->url_imagem = $upload[$tamanho-1];
          }
     
            $artista->nome = $request->input('nome');
            $artista->data_nascimento = $request->input('data_nascimento');
            $artista->save();
            return redirect('artista/listar')->with(['msg' => "O artista '$artista->nome' foi salvo!"]);
       }
    
       function editar($id) {
         $artista = Artista::find($id);
         return view('frmArtista', compact('artista'));
       }
    
       function excluir($id) {
         $artista = Artista::find($id);
         $artista->delete();
         if ($artista->url_imagem != "") {
          Storage::delete("public/upload/artistas/".$artista->url_imagem);
        }

         return redirect('artista/listar')->with(['msg' => "O artista '$artista->nome' foi apagado!"]);
       }
}
