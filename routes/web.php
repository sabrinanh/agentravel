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
    return view('cust.SignIn');
});

Route::get('/SignIn', function () {
    return view('cust.home');
});

Route::get('/tourpackages', function () {
    return view('cust.tourpackages');
});

Route::get('/home', function () {
    return view('cust.home');
});

Route::get('/about', function () {
    return view('cust.about');
});

Route::get('/services', function () {
    return view('cust.services');
});

Route::get('/contact', function () {
    return view('cust.contact');
});

Route::get('/signUp', function () {
    return view('cust.signUp');
});

Route::get('/detailbaliA', function () {
    return view('cust.detailbaliA');
});

Route::get('/detaillombok', function () {
    return view('cust.detaillombok');
});

Route::get('/detailbandung', function () {
    return view('cust.detailbandung');
});

Route::get('/detailmalangA', function () {
    return view('cust.detailmalangA');
});

Route::get('/detaildieng', function () {
    return view('cust.detaildieng');
});

Route::get('/detaillabuan', function () {
    return view('cust.detaillabuan');
});

Route::get('/detailkarimun', function () {
    return view('cust.detailkarimun');
});

Route::get('/detailsemarangA', function () {
    return view('cust.detailsemarangA');
});

Route::get('/detailrajaampat', function () {
    return view('cust.detailrajaampat');
});
