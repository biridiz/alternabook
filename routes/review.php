<?php

/** @var \Laravel\Lumen\Routing\Router $router */
use App\Helpers\AuthHelper;

$router->get('/review/register', 'ReviewController@registerPage');

$router->post('/review/register', 'ReviewController@create');

$router->get('/review/book/', 'ReviewController@registerPage');

$router->get('/review/list/{id_livro}', 'ReviewController@list');

$router->get('/review/edit/{id_resumo}', 'ReviewController@edit');