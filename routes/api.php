<?php

use Illuminate\Http\Request;
use App\Http\Controllers\ContactControllerEn;
use App\Http\Controllers\ContactControllerRu;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

// url: {host}/api/
//https:{host}/api/contact/{en|ru}
Route::get('/contact/ru', [ContactControllerRu::class,'index']);
Route::get('/contact/en', [ContactControllerEn::class,'index']);
//https:{host}/api/contact/{en|ru}/send
Route::post('/contact/ru/send', [ContactControllerRu::class,'send'])->name('send_mail_ru');
Route::post('/contact/en/send', [ContactControllerEn::class,'send'])->name('send_mail_en');

