<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cadastro', function () {
    return view('cadastro');
});

Route::get('/cadastro', 'App\Http\Controllers\CadastroController@index'); 

Route::post('/cadastro', 'App\Http\Controllers\CadastroController@store'); 
