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

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/home', function () {
    return view('home');
});

Route::get('/', function () {
    return view('Auth.login');
});

Route::get('/lupa', 'MailController@index');

Route::post('/lupa/password', 'MailController@sendMail');

Route::get('/team', function () {
    return view('team');
});

Route::resource('posts', 'PostController');

Route::get('/admin/panel', function () {
    return view('admin.panel');
});