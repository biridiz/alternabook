<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->get('/books', 'BookController@search');
