<?php
Route::group([

'prefix' => 'api'

], function ($router) {
Route::post('login', 'AuthController@login');
Route::post('logout', 'AuthController@logout');
Route::post('refresh', 'AuthController@refresh');
Route::post('user-profile', 'AuthController@me');

});
