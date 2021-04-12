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
    return view('welcome');
});
Route::get('/contact/ru', function () {
    return view('contactRu');
});
Route::get('/contact/en', function () {
    return view('contactEn');
});

Route::post('/contact/ru/send', 'ContactControllerRu@submit', 'ContactControllerRu@send');

Route::post('/contact/en/send', 'ContactControllerEn@submit', 'ContactControllerEn@send');
