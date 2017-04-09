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
use Symfony\Component\Console\Output\ConsoleOutput;

Route::get('/', function () {
    return view('index');
});

Route::get('curso', 'CursoController@list');

Route::get('admin', function () {
	echo "You have access!";
});
Auth::routes();

Route::get('home', 'HomeController@index');
Route::post('insertRole', 'HomeController@insertRole');
Route::get('getEditRole/{id}', 'HomeController@getEditRole');
