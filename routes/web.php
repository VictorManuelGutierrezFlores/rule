<?php

use Illuminate\Support\Facades\Route;


//llama al controlador
use App\Http\Controllers\TeamController;

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

Route::post('/crearequipos',[TeamController::class,'create'])->name('comienzajuego.create');

Route::get('/comienzajuego',function(){
    return view('comienzajuego');
})->name('comienzajuego');

Route::get('/marcadorfinal',function(){
    return view('marcadorfinal');
})->name('marcadorfinal');