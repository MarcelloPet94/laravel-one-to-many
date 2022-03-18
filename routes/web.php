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
    return view('welcome');
});

// tutte le rotte di autenticazione
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

// solo se l'utente è loggato middleware()
// il controller deve essere cercato nel namespace Admin 
//prefix:  admin da vedere route:list ---> admin.home ecc...
Route::middleware('auth')
    ->namespace('Admin') // serve per recuperare nella cartella -> Admin\HomeController
    ->name('admin.')
    ->prefix('admin')
    ->group(function() {
        Route::get('/', 'HomeController@index')->name('home');
        // gestisce le rotte per la CRUD da loggato
        Route::resource('/posts', 'PostController');
    });