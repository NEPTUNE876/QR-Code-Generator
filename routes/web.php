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

Route::get('qrcode', [\App\Http\Controllers\QrCodeController::class, 'index'])->name('qrcode');

Route::post('save', [\App\Http\Controllers\QrCodeController::class, 'store'])->name('save');

Route::get('test', function () {
    \Illuminate\Support\Facades\Artisan::call('test:command');
//    dd("Command has been ran");
});
