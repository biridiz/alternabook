<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->post('/signup', 'AuthController@signUpUser');

$router->get('/signup', 'AuthController@signUpPage');

$router->get('/signin', 'AuthController@signInPage');