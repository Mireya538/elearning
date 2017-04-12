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

// Route::get('user/index','UsuarioController@index');
Auth::routes();
Route::get('/', function () {
    return view('index');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('courses', function () {
    return view('courses');
});
Route::get('blog', function () {
    return view('blog');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('pricing', function () {
    return view('pricing');
});

Route::get('home', 'HomeController@index');
Route::get('admin', 'AdminController@index');
Route::get('users', 'UserController@index');
Route::post('addUser', 'UserController@addUser');
// Route::get('role', 'RoleController@index');
Route::post('insertRole', 'RoleController@insertRole');
// Route::put('updateRole', 'RoleController@updateRole');
// Route::get('role/{id}', 'RoleController@role');
// // Route::get('usuarios', 'UsuarioController@index');
// Route::get('usuarios', 'HomeController@listUsuarios');
// Route::get('getUser/{id}', 'HomeController@getUser');
// // Route::get('deleteUser/{id}', 'HomeController@deleteUser');
// // Route::get('editUser', 'HomeController@editUser');