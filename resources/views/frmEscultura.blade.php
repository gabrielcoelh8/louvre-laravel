@extends('template')

@section('conteudo')

<form action="{{url('escultura/salvar')}}" method="post" enctype="multipart/form-data" class="container row p-3 bg-dark-subtle text-light rounded m-2">
  @csrf
  <label for="exampleInputPassword1" class="mb-4 row">Cadastro de esculturas.</label>

  <div class="mb-3" hidden>
    <label for="id" class="form-label">ID</label>
    <input class='form-control' readonly type="number" name="id" value="{{$escultura->id}}">
  </div>

<div class="row">
  <div class="mb-3 col-6">
    <div class="form-floating p-0">
        <input class="form-control @error('nome') is-invalid @enderror" type="text" name="nome" value="{{old('nome', $escultura->nome)}}">
        <label for="nome">Nome:</label>

        @error('nome')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
  </div>

  <div class="mb-3 col">
    <div class="form-floating p-0">
        <input class="form-control @error('material') is-invalid @enderror" type="text" name="material" value="{{old('material', $escultura->material)}}">
        <label for="material">Material:</label>
        
        @error('material')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
  </div>
</div>

<div class="mb-3 col">
  <div class="form-floating p-0">

      <textarea class="form-control @error('descricao') is-invalid @enderror" placeholder="" style="height: 100px" id="floatingTextarea" name="descricao">{{old('descricao', $escultura->descricao)}}</textarea>

      <label for="descricao">Descrição:</label>

      @error('descricao')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
  </div>
</div>
</div>

<div class="row">
  <div class="mb-3 col">
    <div class="form-floating p-0">
        <input class="form-control @error('ano_lancamento') is-invalid @enderror" type="number" name="ano_lancamento" value="{{old('ano_lancamento', $escultura->ano_lancamento)}}">
        <label for="ano_lancamento">Ano de lançamento:</label>

        @error('ano_lancamento')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
  </div>

  <div class="mb-3 col">
    <div class="form-floating p-0">
        <input class="form-control" type="file" name="url_imagem" accept="image/*" value="{{old('url_imagem', $escultura->url_imagem)}}">
        <label for="url_imagem">Envie uma imagem:</label>
    </div>
    <div id="nomeHelp" class="p-2">
      @if ($escultura->url_imagem != "")
        <img class="img-thumbnail" style="width: 200px;height:200px;object-fit:cover" src="/storage/upload/esculturas/{{$escultura->url_imagem}}">
      @endif
    </div>
  </div>
</div>

  <div class="mb-3 col-5">
    <label for="artista" class="form-label small">Artista:</label>
    <select class="form-select m-2 @error('id_artista') is-invalid @enderror" name="id_artista" >
      
      @foreach($artistas as $artista)
      <option {{ $artista->id == old('id_artista', $escultura->id_artista) ?'selected': ''}} value="{{$artista->id}} ">{{$artista->nome}}</option>
      @endforeach

    </select>
  </div>

  <div class="mb-3 row">
  <button class="btn btn-primary col-1 mx-2" type="submit" name="button">Salvar</button>
  </div>
</form>
@endsection
