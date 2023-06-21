<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title></title>
    <style>
      * {
        font-family: arial, sans-serif;
      }
      h1 {
        font-size: 3rem;
        text-align: center;
      }
      table {
        width: 80%;
        margin: 0 auto;
        border-collapse: collapse;
      }
      th, td {
        border: solid 1px gray;
        padding: 0.5rem;
        font-size: 1.5rem;
        text-align: center;
      }
      img {
        width: fit-content;
        height: 100px;
      }
    </style>
  </head>
  <body>
    <h1>Relatório de Artistas</h1>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Data de nascimento</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach($artistas as $artista)
          <tr>
            <td>{{$artista->id}}</td>
            <td>{{$artista->nome}}</td>
            <td>{{$artista->data_nascimento}}</td>
            <td><img src="{{ storage_path('app/public/upload/artistas/'.$artista->url_imagem) }}"></td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </body>
</html>