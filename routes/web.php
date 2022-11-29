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

Route::get('/', function(){
    return view('index');
})->name('home');

Route::get('/crearequipos',function(){
    return view('crearequipos');
})->name('crearequipos');

Route::get('/comienzajuego',function(){
    return view('comienzajuego');
})->name('comienzajuego');

Route::get('/r123',function(){
    return view('r123');
})->name('r123');

Route::get('/r132',function(){
    return view('r132');
})->name('r132');

Route::get('/r213',function(){
    return view('r213');
})->name('r213');

Route::get('/index',function(){
    return view('index');
})->name('index');

Route::get('/r231',function(){
    return view('r231');
})->name('r231');

Route::get('/r321',function(){
    return view('r321');
})->name('r321');

Route::get('/r312',function(){
    return view('r312');
})->name('r312');
