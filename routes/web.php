<?php

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
    return view('tour.Index');
});

Route::get('/home', function () {
    return view('tour.Index');
});

Route::get('/Tentang-kami', function () {
    return view('tour.Tentang');
});
