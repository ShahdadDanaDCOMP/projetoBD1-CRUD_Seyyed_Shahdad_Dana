<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controlador;
use App\Http\Controllers\ControladorUsuarios;
use App\Http\Controllers\ControladorGeneros;
use App\Http\Controllers\ControladorEpisodios;
use App\Models\ModelFilme;
use App\Models\ModelGenero;
use App\Models\ModelEpisodio;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


});

Route::get('/', function () {return view('login');
Route::get('/','App\Http\Controllers\Controlador@login');

*/
//Rota Teste
Route::get('/teste', function(){ 

    $filmes = ModelFilme::all();

    $generos = ModelGenero::all();

    

    dd($filmes);

});
//Rotas Gerais
Route::get('/', [Controlador::class, 'irLogin']);
Route::get('selecionar', [Controlador::class, 'irSelecionar']);
//Rotas para Filmes
Route::get('entradaFilmes', [Controlador::class, 'irEntradaFilmes']);
Route::get('adicionarFilmes', [Controlador::class, 'irAdicionarFilmes']);
Route::get('visualizarFilmes', [Controlador::class, 'irVisualizarFilmes']);
Route::post('addFilmes', [Controlador::class, 'addFilmes']);
Route::get('deleteFilmes{id_filme}',[Controlador::class, 'deleteFilmes']);
Route::get('readFilmes{id_filme}',[Controlador::class, 'readFilmes']);
Route::get('editFilmes{id_filme}',[Controlador::class, 'editFilmes']);
Route::post('updateFilmes',[Controlador::class, 'updateFilmes']);
//Rotas para Usuarios
Route::get('entradaUsuarios', [ControladorUsuarios::class, 'irEntradaUsuarios']);
Route::get('adicionarUsuarios', [ControladorUsuarios::class, 'irAdicionarUsuarios']);
Route::get('visualizarUsuarios', [ControladorUsuarios::class, 'irVisualizarUsuarios']);
Route::post('addUsuarios', [ControladorUsuarios::class, 'addUsuarios']);
Route::get('deleteUsuarios{id_usuario}',[ControladorUsuarios::class, 'deleteUsuarios']);
Route::get('readUsuarios{id_usuario}',[ControladorUsuarios::class, 'readUsuarios']);
Route::get('editUsuarios{id_usuario}',[ControladorUsuarios::class, 'editUsuarios']);
Route::post('updateUsuarios',[ControladorUsuarios::class, 'updateUsuarios']);
//Rotas para Generos
Route::get('entradaGeneros', [ControladorGeneros::class, 'irEntradaGeneros']);
Route::get('adicionarGeneros', [ControladorGeneros::class, 'irAdicionarGeneros']);
Route::get('visualizarGeneros', [ControladorGeneros::class, 'irVisualizarGeneros']);
Route::post('addGeneros', [ControladorGeneros::class, 'addGeneros']);
Route::get('deleteGeneros{id_genero}',[ControladorGeneros::class, 'deleteGeneros']);
Route::get('readGeneros{id_genero}',[ControladorGeneros::class, 'readGeneros']);
Route::get('editGeneros{id_genero}',[ControladorGeneros::class, 'editGeneros']);
Route::post('updateGeneros',[ControladorGeneros::class, 'updateGeneros']);
//Rotas para Episodios
Route::get('entradaEpisodios', [ControladorEpisodios::class, 'irEntradaEpisodios']);
Route::get('adicionarEpisodios', [ControladorEpisodios::class, 'irAdicionarEpisodios']);
Route::get('visualizarEpisodios', [ControladorEpisodios::class, 'irVisualizarEpisodios']);
Route::post('addEpisodios', [ControladorEpisodios::class, 'addEpisodios']);
Route::get('deleteEpisodios{id_episodio}',[ControladorEpisodios::class, 'deleteEpisodios']);
Route::get('readEpisodios{id_episodio}',[ControladorEpisodios::class, 'readEpisodios']);
Route::get('editEpisodios{id_episodio}',[ControladorEpisodios::class, 'editEpisodios']);
Route::post('updateEpisodios',[ControladorEpisodios::class, 'updateEpisodios']);



