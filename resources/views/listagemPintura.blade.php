@extends('template')

@section('conteudo')
<a class="btn btn-dark m-2" href="{{url('pintura/novo')}}">
  <span class="material-symbols-outlined m-1">add</span>
</a>

<div class='row row-cols-1 row-cols-md-3 g-4'>
@foreach($pinturas as $pintura)
    <div class='col'>
        <div class='card h-100'>
              @if ($pintura->url_imagem != "")
                <img style="width: 50px;" class='img-thumbnail m-1 w-auto' alt='...' src="/storage/upload/pinturas/{{$pintura->url_imagem}}">
              @endif

              <div class='card-body'>
                <ul class='list-group list-group-flush'>

                  <li class='list-group-item'><small>Nome: </small>
                    <span class='badge rounded-pill text-bg-primary'>{{$pintura->nome}}</span>
                  </li>

                  <li class='list-group-item'><small>Técnica: </small>
                    <span class='badge rounded-pill text-bg-secondary'>{{$pintura->tecnica}}</span>
                  </li>

                  <li class='list-group-item'><small>Ano de lançamento: </small>
                    <span class='badge rounded-pill text-bg-warning'>{{$pintura->ano_lancamento}}</span>
                  </li>


                  <li class='list-group-item'><small>Artista: </small>
                    <span class='badge rounded-pill text-bg-danger'>{{$pintura->artista->nome}}</span>
                  </li>
                  
                </ul>
              </div>

              <div class='card-footer'>
                <div class='row d-flex justify-content-end'>
                  <a href='editar/{{$pintura->id}}' class='col-2 btn btn-outline-secondary m-1'><span class='material-symbols-outlined text-center w-15'>Edit</span></a>
                  <a href='excluir/{{$pintura->id}}' class='col-2 btn btn-outline-secondary m-1'><span class='material-symbols-outlined text-center w-15'>Delete</span></a>
                </div>
              </div>

        </div>
    </div>
@endforeach
</div>
@endsection
