<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');

Route::get('/home', [HomeController::class, 'show'])->name('home');

Route::get('/hi', function () {
    return ('hi nama saya diah');
})->name('hi');

// Route::get('/home', function () {
//     return view('home');
// })->name('home');

Route::get('/home/sum', [FirstController::class, 'sum'])->name('home.sum');

Route::get('/home/multiply/{param1}/{param2?}', [FirstController::class, 'multiply'])->name('home.multiply');

