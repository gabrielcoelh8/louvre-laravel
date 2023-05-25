<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PinturaControle;
use App\Http\Controllers\ArtistaControle;
use App\Http\Controllers\EsculturaControle;
use App\Models\Pintura;
use App\Models\Artista;
use App\Models\Escultura;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $pinturas = Pintura::orderBy('id', 'desc')->limit(5)->get();
    $esculturas = Escultura::orderBy('id', 'desc')->limit(5)->get();
    $artistas = Artista::orderBy('id', 'desc')->limit(5)->get();

    return view('index', compact('pinturas', 'esculturas', 'artistas'));
});

Route::get('/pintura/listar', [PinturaControle::class, 'listar']);
Route::get('/pintura/novo', [PinturaControle::class, 'novo']);
Route::get('/pintura/editar/{id}', [PinturaControle::class, 'editar']);
Route::get('/pintura/excluir/{id}', [PinturaControle::class, 'excluir']);
Route::post('/pintura/salvar', [PinturaControle::class, 'salvar']);

Route::get('/escultura/listar', [EsculturaControle::class, 'listar']);
Route::get('/escultura/novo', [EsculturaControle::class, 'novo']);
Route::get('/escultura/editar/{id}', [EsculturaControle::class, 'editar']);
Route::get('/escultura/excluir/{id}', [EsculturaControle::class, 'excluir']);
Route::post('/escultura/salvar', [EsculturaControle::class, 'salvar']);

Route::get('/artista/listar', [ArtistaControle::class, 'listar']);
Route::get('/artista/novo', [ArtistaControle::class, 'novo']);
Route::get('/artista/editar/{id}', [ArtistaControle::class, 'editar']);
Route::get('/artista/excluir/{id}', [ArtistaControle::class, 'excluir']);
Route::post('/artista/salvar', [ArtistaControle::class, 'salvar']);