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

use App\Models\Escala;

$router->get('/', function () use ($router) {
    //return $router->app->version();

    $escala = Escala::query()->get();
    return view('escala', ['escala' => $escala]);
});
