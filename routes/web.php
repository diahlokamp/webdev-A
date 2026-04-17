<?php

use App\Http\Controllers\FirstController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
})->name('about');


Route::get('/shop', [StoreController::class, 'show'])->name('shop');


Route::get('/home', [HomeController::class, 'show'])->name('home');

Route::get('/hi', function () {
    return ('hi nama saya diah');
})->name('hi');

// Route::get('/home', function () {
//     return view('home');
// })->name('home');

Route::get('/home/sum', [FirstController::class, 'sum'])->name('home.sum');

Route::get('/home/multiply/{param1}/{param2?}', [FirstController::class, 'multiply'])->name('home.multiply');

Route::get('/product/insert-form', [StoreController::class, 'product_insert_form'])->name('product_insert_form');

Route::post('/product/insert', [StoreController::class, 'insert_product'])->name('insert_product');

Route::get('/product/edit/{product_id}', [StoreController::class, 'product_edit_form'])->name('product_edit_form');

Route::put('/product/update/{product_id}', [StoreController::class, 'update_product'])->name('update_product');

Route::delete('/product/delete/{product_id}', [StoreController::class, 'delete_product'])->name('delete_product');