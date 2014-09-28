<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

$router->get('/', 'App\Http\Controllers\SiteController@loadHome');
$router->post('/', 'App\Http\Controllers\SiteController@addLink');

$router->get('/{key}', 'App\Http\Controllers\SiteController@loadLink');
