<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});Route::get('{n}', ['as' => "home", function() { 	return 'Je suis à la page d\'accueil.'; }]);Route::get('{n}', ['as' => "home", function($n) { 	return response('Je suis la page ' . $n . ' !', 200);}])->where('n', '[1-3]');
