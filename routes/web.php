<?php

/** @var \Laravel\Lumen\Routing\Router $router */
use App\Helpers\AuthHelper;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    $livros = DB::table('livro')
    ->join('autor', 'livro.id_autor', '=', 'autor.id')
    ->join('editora', 'livro.id_editora', '=', 'editora.id')
    ->select('livro.titulo_livro', 'autor.nome_autor', 'editora.nome_editora')
    ->get();

    return view('pages.index', ['livros' => $livros, 'userLogged' => AuthHelper::has()]);
});
