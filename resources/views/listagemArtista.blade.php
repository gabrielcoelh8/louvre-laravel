@extends('template')

@section('conteudo')
<a class="btn btn-dark m-2" href="{{url('artista/novo')}}">
  <span class="material-symbols-outlined m-1">add</span>
</a>
<a class="btn btn-dark m-2" href="{{url('artista/relatorio')}}">
  <span class="material-symbols-outlined m-1">receipt_long</span>
</a>

<div class='row row-cols-1 row-cols-md-3 g-4'>
@foreach($artistas as $artista)
    <div class='col'>
        <div class='card h-100'>
              @if ($artista->url_imagem != "")
                <img class='img-thumbnail m-1 w-auto' alt='...' src="/storage/upload/artistas/{{$artista->url_imagem}}">
              @endif

              <div class='card-body'>
                <ul class='list-group list-group-flush'>

                  <li class='list-group-item'><small>Nome: </small>
                    <span class='badge rounded-pill text-bg-primary'>{{$artista->nome}}</span>
                  </li>

                  <li class='list-group-item'><small>Data de nascimento: </small>
                    <span class='badge rounded-pill text-bg-secondary'>{{$artista->data_nascimento}}</span>
                  </li>
                  
                </ul>
              </div>

              <div class='card-footer'>
                <div class='row d-flex justify-content-end'>
                  <a href='editar/{{$artista->id}}' class='col-2 btn btn-outline-secondary m-1'><span class='material-symbols-outlined text-center w-15'>Edit</span></a>
                  <a href='excluir/{{$artista->id}}' class='col-2 btn btn-outline-secondary m-1'><span class='material-symbols-outlined text-center w-15'>Delete</span></a>
                </div>
              </div>

        </div>
    </div>
@endforeach
</div>
@endsection
