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
Route::get('welcome', function () {
    return view('welcome');
});
Route::get('noticias', function () {
    return view('noticias');
});
Route::get('empresa', function () {
    return view('empresa');
});
Route::get('ondeestamos', function () {
    return view('ondeestamos');
});
