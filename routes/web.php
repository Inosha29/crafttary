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
Route::get('/crafttary', function () {
    return view('customer.crafttary');
});
Route::get('/cart', function () {
    return view('customer.cart');
});
Route::get('/checkout', function () {
    return view('customer.checkout');
});
Route::get('/product-details', function () {
    return view('customer.product-details');
});
Route::get('/shop', function () {
    return view('customer.shop');
});
Route::get('/home', function () {
    return view('customer.home');
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
Route::get('/user', function () {
    return view('admin.user');
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
Route::get('/inbox-details', function () {
    return view('admin.inbox_details');
});
Route::get('/login', function () {
    return view('admin.login');
});
Route::get('/maps', function () {
    return view('admin.maps');
});
Route::get('/payment', function () {
    return view('admin.payment');
});
Route::get('/price', function () {
    return view('admin.price');
});
Route::get('/items', function () {
    return view('admin.product');
});
Route::get('/orders', function () {
    return view('admin.order');
});
Route::get('/signup', function () {
    return view('admin.signup');
});
Route::get('/typography', function () {
    return view('admin.typography');
});
Route::resource('admin.items','ItemController');
Route::resource('admin.orders','OrderController');
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
