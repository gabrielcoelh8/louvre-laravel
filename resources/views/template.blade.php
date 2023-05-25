<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Louvre</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/style.css">
  </head>

  <body>

    <!--navbar-->
    <section class="">
      <nav class="navbar navbar-expand-lg sticky-top bg-body-tertiary navbar-dark bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{url('/')}}">
          <img src="/storage/assets/icon.png" style="width: auto; height: 50px;" alt='...'>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;" id="navbarScroll">
            <ul class="nav nav-underline">
                <li class="nav-item">
                  <a class="nav-link {{ (request()->is('/')) ? 'active' : '' }}" aria-current="page" href="{{url('/')}}">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ (request()->is('artista/listar')) ? 'active' : '' }}" aria-current="page" href="{{url('artista/listar')}}">Artistas</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link {{ (request()->is('pintura/listar')) ? 'active' : '' }}" aria-current="page" href="{{url('pintura/listar')}}">Pinturas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (request()->is('escultura/listar')) ? 'active' : '' }}" aria-current="page" href="{{url('escultura/listar')}}">Esculturas</a>
                </li>
              </ul>
          </div>
        </div>
      </nav>
    </section>


      <section class="container p-2 rounded" data-bs-theme="dark">
          @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>Bonjour!</strong>
                  <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
          @endif
  
          @if (session('msg') )
                  <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    <strong>Bonjour!</strong> {{ session('msg') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
          @endif

        @yield('conteudo')
      </section>

  </body>
</html>
