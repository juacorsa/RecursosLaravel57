<?php

Route::get('/', function () {
    return view('welcome');
});

// Rutas de idiomas
Route::get('/idiomas', 'IdiomaController@index')->name('idiomas.index');
Route::get('/idiomas/create', 'IdiomaController@create')->name('idiomas.create');
Route::post('/idiomas/create', 'IdiomaController@store')->name('idiomas.store');
Route::get('/idiomas/edit/{id}', 'IdiomaController@edit')->name('idiomas.edit');
Route::put('/idiomas', 'IdiomaController@update')->name('idiomas.update');





