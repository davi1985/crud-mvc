<?php

use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');

$router->get('/novo', 'UsersController@create');
$router->post('/novo', 'UsersController@store');

$router->get('/usuario/{id}/editar', 'UsersController@edit');
$router->post('/usuario/{id}/editar', 'UsersController@update');

$router->get('/usuario/{id}/excluir', 'UsersController@delete');
