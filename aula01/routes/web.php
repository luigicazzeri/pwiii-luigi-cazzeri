<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/comeco', function () {
    return view('comeco');
});

Route::get('/users/{param}/{paramii}', function ($param, $paramii) {
    return $param. '-' . $paramii;
});

Route::prefix('usuarios')->group(function(){
    route::get('/edit', function() {
        return 'edit';
    });
    route::get('/delete', function() {
        return 'delete';
    });
});

Route::get('/dados-de-usuarios/{user}', function(\App\Models\User $user){
    return $user;
});