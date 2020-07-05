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
    return view('konten.erd');
});

Route::get('/artikel', 'ArtikelController@index');
Route::get('/artikel/create', 'ArtikelController@form');
Route::post('/artikel', 'ArtikelController@simpan');
Route::get('/artikel/{id}', 'ArtikelController@detail');
Route::get('/artikel/{id}/edit', 'ArtikelController@formEdit');
Route::put('/artikel/{id}', 'ArtikelController@update');
Route::delete('/artikel/{id}', 'ArtikelController@hapus');
