<?php

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
    return redirect('/home');
    // return $router->app->version();
});

$router->get('/home', 'MainController@index');

$router->get('/video/{id}', 'ContentController@video');

$router->get('/ebook/{id}', 'ContentController@ebook');