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

Route::get('pzn', function(){
    return 'Hello PZN';
});

// redirect
Route::redirect('/youtube', '/pzn', 301);

// fallback ini buat halaman 404 sendiri
Route::fallback(function(){
    return '404 Not Found. Go Back to <a href="/pzn">PZN</a>';
});

Route::view('/hello', 'hello', ['name' => 'PZN']);
Route::get('/hello-again', function(){
    return view('hello', ['name' => 'Andika']);
});

Route::get('/hello-world', function(){
    return view('hello.world', ['name' => 'PZN']);
});

