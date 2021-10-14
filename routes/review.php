<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->get('/review/register', 'ReviewController@registerPage');

$router->post('/review/register', 'ReviewController@create');

$router->get('/review/book/', 'ReviewController@registerPage');
