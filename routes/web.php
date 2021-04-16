<?php


Route::get('/', function () {
    return view('welcome');
});
Route::get('/contact/ru', function () {
    return view('contactRu');
});
Route::get('/contact/en', function () {
    return view('contactEn');
});

Route::post('/contact/ru/send', 'ContactControllerRu@send');

Route::post('/contact/en/send', 'ContactControllerEn@send');
