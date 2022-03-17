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

//! Usando i metodi appresi oggi scrivo la Route per la "home" così
Route::get('/', 'MovieController@home')->name('home');

//! Viceversa, il collegamento per un "altra" pagina, sarà così:
Route::get('/movies', 'MovieController@index')->name('movies.index');
