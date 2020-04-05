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
Route::get('/store', ('addcontrole@add') );
Route::get( '/show', ('hellocontroller@show'));
Route::get( '/dash', ('hellocontroller@dashboard'));
Route::post( '/store', ('addcontrole@store'));


route::get('/books',('BooksController@index'));
route::get('/books/create',('bookscontroller@index2'));
route::post('/cr',('bookscontroller@create'));
route::get('/cr',('bookscontroller@create'));
route::get('/infoid/{infos}',('bookscontroller@info'));
route::get('/infoid/{infos}/edit',('bookscontroller@edit'));
route::patch('/infoid/{infos}',('bookscontroller@update'));
route::delete('/infoid/{infos}/delete',('bookscontroller@delete'));
route::get('/{infos}/active',('bookscontroller@active'));
route::get('/{infos}/desactive',('bookscontroller@desactive'));