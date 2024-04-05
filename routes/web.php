<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicacionController;
use App\Http\Controllers\NoticiaController;
use App\Models\Publicacion;

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
    if(auth()->check()){
        return view('/home');//si esta logueado
    }
    // Pagina principal localhost:3008
    return view('ultimas-noticias');
});





Route::get('/ciberseguridad', function () {
    $publicaciones = Publicacion::all();
    return view('ciberseguridad', compact('publicaciones'));
    
});

Route::get('/noticia/{id}', 'App\Http\Controllers\NoticiaController@show')->name('noticia.show');


Route::get('/ia', function () {
    $publicaciones = Publicacion::all();
    return view('ia', compact('publicaciones'));
});

Route::get('/tecnologia', function () {
    $publicaciones = Publicacion::all();
    return view('tecnologia', compact('publicaciones'));
});

Route::get('/one', function () {
    $publicaciones = Publicacion::all();
    return view('publicaciones', compact('publicaciones'));
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])
    ->middleware('auth.admin')
    ->name('admin.index');

Route::resource('/admin', PublicacionController::class)->middleware('auth.admin');