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
    return view('SignIn');
});

Route::get('/SignIn', function () {
    return view('home');
});

Route::get('/tourpackages', function () {
    return view('tourpackages');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/signUp', function () {
    return view('signUp');
});

Route::get('/detailbaliA', function () {
    return view('detailbaliA');
});

Route::get('/detaillombok', function () {
    return view('detaillombok');
});

Route::get('/detailbandung', function () {
    return view('detailbandung');
});

Route::get('/detailmalangA', function () {
    return view('detailmalangA');
});

Route::get('/detaildieng', function () {
    return view('detaildieng');
});

Route::get('/detaillabuan', function () {
    return view('detaillabuan');
});

Route::get('/detailkarimun', function () {
    return view('detailkarimun');
});

Route::get('/detailsemarangA', function () {
    return view('detailsemarangA');
});

Route::get('/detailrajaampat', function () {
    return view('detailrajaampat');
});