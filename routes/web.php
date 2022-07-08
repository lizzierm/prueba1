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

Route::get('/nuevodoc', function(){
   return 'nuevos documentos'; 
});

Route::get('/lista', function () {
    return [
        'Cursos' => [
            'Curso de Laravel 9',
            'Curso de programación orientada a objetos',
            'Curso de Git',
        ]
    ];
});