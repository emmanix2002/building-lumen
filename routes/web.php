<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('/', ['uses' => 'IndexController@home']);

$router->post('/divisions', ['uses' => 'CalculatorController@division']);

$router->post('/divisions-with-try', ['uses' => 'CalculatorController@divisionWithTryCatch']);

$router->post('/divisions-with-check-and-throw', ['uses' => 'CalculatorController@divisionWithCheckAndThrow']);
