<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/guarderias', 'GuarderiasController@guarderia' );

//Route::get('/guarderia{guarderia?}', function ($guarderia = 'el delfin'){
//    return 'Hola: '. $guarderia;
//});

Route::get('/guarderias', 'GuarderiasController@guarderias');
Route::get('/name/{nombre}', 'GuarderiasController@nombre');
//Route::resource('/marina', 'MarinaController');
Route::resource('/marinas', 'MarinasController');


