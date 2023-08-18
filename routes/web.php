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

// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });

$router->get('/', function () use ($router) {
    echo "<center> Welcome App version 0.0.1</center>";
});

<<<<<<< HEAD
=======
// $router->get('/version', function () use ($router) {
//     return $router->app->version();
// });

>>>>>>> 49d6f3e912e8e57b8b2480cb2d8d5c21865246f3
Route::group([
    'prefix' => 'api'
    ], function ($router) {

        Route::post('login', 'AuthController@login');
        Route::post('logout', 'AuthController@logout');
        Route::post('refresh', 'AuthController@refresh');
        Route::post('user-profile', 'AuthController@me');
        Route::get('permission','Setting\UserAccessController@setup_permission');

    });
