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
Auth::routes();

Route::get('home', 'HomeController@index');
Route::get('role', 'RoleController@index');
Route::post('insertRole', 'RoleController@insertRole');
Route::put('updateRole', 'RoleController@updateRole');
Route::get('role/{id}', 'RoleController@role');
