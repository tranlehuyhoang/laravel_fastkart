<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/404', function () {
    return view('client.404');
});
Route::get('/', function () {
    return view('client.home');
});
Route::get('/blog', function () {
    return view('client.blog');
});
Route::get('/blog-detail', function () {
    return view('client.blog-detail');
});

Route::get('/cart', function () {
    return view('client.cart');
});

Route::get('/checkout', function () {
    return view('client.checkout');
});
Route::get('/compare', function () {
    return view('client.compare');
});
Route::get('/forgot', function () {
    return view('client.forgot');
});
Route::get('/login', function () {
    return view('client.login');
});
Route::get('/register', function () {
    return view('client.register');
});
Route::get('/order-success', function () {
    return view('client.order-success');
});
Route::get('/product-detail', function () {
    return view('client.product-detail');
});
Route::get('/shop', function () {
    return view('client.shop');
});
Route::get('/user-dashboard', function () {
    return view('client.user-dashboard');
});
Route::get('/seller-become', function () {
    return view('client.seller-become');
});
Route::get('/seller-dashboard', function () {
    return view('client.seller-dashboard');
});
Route::get('/seller-detail', function () {
    return view('client.seller-detail');
});
Route::get('/seller-list', function () {
    return view('client.seller-list');
});
Route::get('/wishlist', function () {
    return view('client.wishlist');
});
