@extends('template')

@section('conteudo')
<form action="{{url('artista/salvar')}}" method="post" enctype="multipart/form-data" class="container row p-3 bg-dark-subtle text-light rounded m-2">
  @csrf
  <label for="exampleInputPassword1" class="mb-4 row">Cadastro de artistas.</label>

  <div class="mb-3" hidden>
    <label for="id" class="form-label">ID</label>
    <input class='form-control' readonly type="number" name="id" value="{{$artista->id}}">
  </div>

<div class="row">
  <div class="mb-3 col-6">
    <div class="form-floating p-0">
        <input class="form-control @error('nome') is-invalid @enderror" type="text" name="nome" value="{{old('nome', $artista->nome)}}">
        <label for="nome">Nome:</label>

        @error('nome')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
  </div>

  <div class="mb-3 col">
    <div class="form-floating p-0">
        <input class="form-control @error('data_nascimento') is-invalid @enderror" type="date" name="data_nascimento" value="{{old('data_nascimento', $artista->data_nascimento)}}">
        <label for="tecnica">Data de nascimento:</label>
        
        @error('data_nascimento')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
  </div>
</div>

  <div class="mb-3 col-3">
    <div class="form-floating p-0">
        <input class="form-control" type="file" name="url_imagem" accept="image/*" value="{{old('url_imagem', $artista->url_imagem)}}">
        <label for="url_imagem">Envie uma imagem:</label>
    </div>
    <div id="nomeHelp" class="p-2">
      @if ($artista->url_imagem != "")
        <img class="img-thumbnail" style="width: 200px;height:200px;object-fit:cover" src="/storage/upload/artistas/{{$artista->url_imagem}}">
      @endif
    </div>
  </div>
</div>

  <div class="mb-3 row">
  <button class="btn btn-primary col-1 mx-3" type="submit" name="button">Salvar</button>
  </div>
</form>
@endsection
