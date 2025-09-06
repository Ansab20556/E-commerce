<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/shop/404', function () {
    return view('shop.404');
});

Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');


Route::get('pages/index', function () {
    return view('pages.index');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/category', function () {
    return view('pages.category');
});

Route::get('/clients', function () {
    return view('pages.clients');
});

Route::get('/products', function () {
    return view('pages.products');
});
