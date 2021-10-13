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
    $livros = DB::table('livro')->get();

    return view('pages.index', ['name' => 'Lindoes', 'livros' => $livros, 'userLogged' => AuthHelper::has()]);
});
