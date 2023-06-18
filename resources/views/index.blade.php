@extends('template')

@section('conteudo')
<div class="container-fluid m-0 p-3" data-bs-theme="light">
            <!--carrousels-->
            <div class="row">
                <div class="col-4 text-light">
                    <div id="carouselExampleDark" class="carousel slide">
                        <div class="carousel-indicators">
                        @foreach($pinturas as $pintura)
                        <button type="button" data-bs-target="#carouselPrincipal" data-bs-slide-to="{{$loop->index}}" class="active" aria-current="true" aria-label="Slide {{($loop->index+1)}}"></button>
                        @endforeach
                        </div>
                        <div class="carousel-inner">

                        @foreach($pinturas as $pintura)
                          <div class="carousel-item  {{$loop->first?'active':''}}" data-bs-interval="10000">
                            <img src="/storage/upload/pinturas/{{$pintura->url_imagem}}" class="object-fit-cover rounded img-fluid d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                              <h5><span class="badge rounded-pill text-bg-dark">{{$pintura->nome}} ({{$pintura->ano_lancamento}})</span></h5>
                              <p><span class='badge rounded-pill text-bg-dark bg-opacity-50'>{{$pintura->artista->nome}}</span></p>
                            </div>
                          </div>
                        @endforeach

                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                </div>
               
                <div class="col-4">
                    <div id="carouselExampleDark2" class="carousel slide">
                        <div class="carousel-indicators">
                        @foreach($artistas as $artista)
                        <button type="button" data-bs-target="#carouselPrincipal" data-bs-slide-to="{{$loop->index}}" class="active" aria-current="true" aria-label="Slide {{($loop->index+1)}}"></button>
                        @endforeach
                        </div>
                        <div class="carousel-inner">

                        @foreach($artistas as $artista)
                          <div class="carousel-item  {{$loop->first?'active':''}}" data-bs-interval="10000">
                            <img src="/storage/upload/artistas/{{$artista->url_imagem}}" class="object-fit-cover rounded img-fluid d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                              <h5><span class="badge rounded-pill text-bg-dark">{{$artista->nome}}</span></h5>
                            </div>
                          </div>
                        @endforeach

                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark2" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark2" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                </div>


                <div class="col-4">
                    <div id="carouselExampleDark3" class="carousel slide">
                        <div class="carousel-indicators">
                        @foreach($esculturas as $escultura)
                        <button type="button" data-bs-target="#carouselPrincipal" data-bs-slide-to="{{$loop->index}}" class="active" aria-current="true" aria-label="Slide {{($loop->index+1)}}"></button>
                        @endforeach
                        </div>
                        <div class="carousel-inner">

                        @foreach($esculturas as $escultura)
                          <div class="carousel-item  {{$loop->first?'active':''}}" data-bs-interval="10000">
                            <img src="/storage/upload/esculturas/{{$escultura->url_imagem}}" class="object-fit-cover rounded img-fluid d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                              <h5><span class="badge rounded-pill text-bg-dark">{{$escultura->nome}} ({{$escultura->ano_lancamento}})</span></h5>
                              <p><span class='badge rounded-pill text-bg-dark bg-opacity-50'>{{$escultura->artista->nome}}</span></p>
                            </div>
                          </div>
                        @endforeach

                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark3" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark3" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                </div>
            </div>


            <!--content-->
            <div class="row my-3 text-light">
                <div class="col-4 text-center">
                    <div class="card opacity-75">
                        <div class="card-header">
                        Pinturas
                        </div>
                        <div class="card-body">
                            <span class="material-symbols-outlined">brush</span>
                          <blockquote class="blockquote mb-0">
                            <p>"A pintura faz parte da vida do ser humano desde o Renascimento, foi umas das principais formas de representação dessa época, está presente nos dias atuais."</p>
                            <footer class="blockquote-footer">Por <cite title="Source Title">Patrícia Lopes</footer>
                          </blockquote>
                        </div>
                    </div>
                </div>


                <div class="col-4 text-center">
                    <div class="card opacity-75">
                        <div class="card-header">
                        Artistas
                        </div>
                        <div class="card-body">
                            <span class="material-symbols-outlined">palette</span>
                          <blockquote class="blockquote mb-0">
                            <p>O amor é eterno - a sua manifestação pode modificar-se, mas nunca a sua essência... através do amor vemos as coisas com mais tranquilidade, e somente com essa tranquilidade um trabalho pode ser bem-sucedido.</p>
                            <footer class="blockquote-footer">Frase de <cite title="Source Title">Vincent van Gogh</cite></footer>
                          </blockquote>
                        </div>
                    </div>
                </div>
                <div class="col-4 text-center">
                    <div class="card opacity-75">
                        <div class="card-header">
                        Esculturas
                        </div>
                        <div class="card-body">
                            <span class="material-symbols-outlined">mosque</span>
                          <blockquote class="blockquote mb-0">
                            <p>Vi um anjo no bloco de mármore e simplesmente fui esculpindo até libertá-lo.</p>
                            <footer class="blockquote-footer">Dito por <cite title="Source Title">Michelangelo</cite></footer>
                          </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection