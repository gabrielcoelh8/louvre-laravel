@extends('template')

@section('conteudo')
<a class="btn btn-dark m-2" href="{{url('escultura/novo')}}">
  <span class="material-symbols-outlined m-1">add</span>
</a>

<div class='row row-cols-1 row-cols-md-3 g-4'>
@foreach($esculturas as $escultura)
    <div class='col'>
        <div class='card h-100'>
              @if ($escultura->url_imagem != "")
                <img style="width: 50px;" class='img-thumbnail m-1 w-auto' alt='...' src="/storage/upload/esculturas/{{$escultura->url_imagem}}">
              @endif

              <div class='card-body'>
                <ul class='list-group list-group-flush'>

                  <li class='list-group-item'><small>Nome: </small>
                    <span class='badge rounded-pill text-bg-primary'>{{$escultura->nome}}</span>
                  </li>

                  <li class='list-group-item'><small>Material: </small>
                    <span class='badge rounded-pill text-bg-secondary'>{{$escultura->material}}</span>
                  </li>

                  <li class='list-group-item'>
                    <span class='badge rounded-pill text-bg-warning'>Descrição:</span> <small>{{$escultura->descricao}}</small>
                  </li>


                  <li class='list-group-item'><small>Ano de lançamento: </small>
                    <span class='badge rounded-pill text-bg-warning'>{{$escultura->ano_lancamento}}</span>
                  </li>


                  <li class='list-group-item'><small>Artista: </small>
                    <span class='badge rounded-pill text-bg-danger'>{{$escultura->artista->nome}}</span>
                  </li>
                  
                </ul>
              </div>

              <div class='card-footer'>
                <div class='row d-flex justify-content-end'>
                  <a href='editar/{{$escultura->id}}' class='col-2 btn btn-outline-secondary m-1'><span class='material-symbols-outlined text-center w-15'>Edit</span></a>
                  <a href='excluir/{{$escultura->id}}' class='col-2 btn btn-outline-secondary m-1'><span class='material-symbols-outlined text-center w-15'>Delete</span></a>
                </div>
              </div>

        </div>
    </div>
@endforeach
</div>
@endsection
