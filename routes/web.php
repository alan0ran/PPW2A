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

Route::get('/home', function () {
    return view('home');
});

Route::get('/home/create', function () {
    return view('create');
});

Route::get('/app', function () {
    return view('layouts.app');
});

Route::resource('posts',
'App\Http\Controllers\PostController');

/*
|--------------------------------------------------------------------------
| Latihan
|--------------------------------------------------------------------------
*/

Route::get( '/halo-dunia' , function() {
    return '<h1>Halo dunia</h1>' ;
   });

Route::get( '/halo/{nama}' , function($nama) {
    return '<h1>Halo ' . $nama . '</h1>';
});

Route::get( '/halo/{nama?}' , function($nama =
'Tanpa Nama' ) {
    return '<h1>Halo ' . $nama . '</h1>';
});

Route::get('/halo-blade', function() {
    return view('/latihan/halo', ['data' => 'Contoh data']);
});

Auth::routes();
Route::get('/login-laravel', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
