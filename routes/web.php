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
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/product-details', function () {
    return view('product-details');
});
Route::get('/shop', function () {
    return view('shop');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/404', function () {
    return view('admin.404');
});
Route::get('/blank', function () {
    return view('admin.blank');
});
Route::get('/buttons', function () {
    return view('admin.buttons');
});
Route::get('/charts', function () {
    return view('admin.charts');
});
Route::get('/grids', function () {
    return view('admin.grids');
});
Route::get('/icons', function () {
    return view('admin.icons');
});
Route::get('/inbox', function () {
    return view('admin.inbox');
});
Route::get('/inbox_deatails', function () {
    return view('admin.inbox_details');
});
Route::get('/login', function () {
    return view('admin.login');
});
Route::get('/maps', function () {
    return view('admin.maps');
});
Route::get('/portlet', function () {
    return view('admin.portlet');
});
Route::get('/price', function () {
    return view('admin.price');
});
Route::get('/product', function () {
    return view('admin.product');
});
Route::get('/signup', function () {
    return view('admin.signup');
});
Route::get('/typography', function () {
    return view('admin.typography');
});
Route::resource('products','ProductController');