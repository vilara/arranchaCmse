<?php

use Illuminate\Support\Facades\Auth;
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


/**
 * Admin LTE
 */

Route::namespace('admin')->group(function () {

    Route::get('home', 'HomeController@index')->name('admin-home');
    Route::get('login', function () {return view('adminlte.auth.login');})->name('login');

});

/**
 * 
 * Autenticação personalizada
 */
Route::get('/', function () {return view('auth.login');})->name('login');
Route::post('/login', 'AuthController@authenticate')->name('cuba-login');
Route::get('/logout', 'AuthController@logout')->name('logout');
Route::get('/home', 'HomeController@index')->name('cuba-home');

Route::get('/cadastroUsuario', 'AuthController@formCadastro')->name('registro-form');
Route::post('/storeUsuario', 'AuthController@store')->name('registro');
//Route::post('/loginPessoal', 'AuthController@authenticate');
//Route::post('/logoutt', 'AuthController@logout')->name('logoutt');

//Route::get('/register', function () {return view('auth.register');})->name('register-form');


//Route::post('/register', 'Auth\RegisterController')->name('register');


/*
Layout CUBA
*/




//Route::post('/login', 'Cuba\Auth\LoginCubaController@login')->name('cuba-login');





//Route::group(['middleware' => ['apijwt']], function(){
//Route::get('/mostrar', 'Cuba\Auth\LoginCubaController@mostrar')->name('cuba-mostrar');
//});







// Route::get('/painel', function () {
//     return view('admin.home');
// });

// Route::get('/site', function () {
//     return view('site.home');
// });

// Route::get('/form', function () {
//     return view('upload.form');
// });
// Route::post('/upload', 'UploadController@upload')->name('upload');

 // Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/testejwt', 'Api\AuthController@index')->name('jwt');
// Route::get('/users', 'Api\UserController@index')->name('users');

// Route::get('/teste', function () {
//     return view('teste.index');
// });
