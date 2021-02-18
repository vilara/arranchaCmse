<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::get('/painel', function () {
    return view('admin.home');
});

Route::get('/site', function () {
    return view('site.home');
});

Route::get('/form', function () {
    return view('upload.form');
});
Route::post('/upload', 'UploadController@upload')->name('upload');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/testejwt', 'Api\AuthController@index')->name('jwt');
Route::get('/users', 'Api\UserController@index')->name('users');
