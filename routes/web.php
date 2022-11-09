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

// Route::get('/services', function () {
//     return view('cust.services');
// });

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
<<<<<<< Updated upstream
    return view('cust.detailrajaampat');
});

Route::get('/dashmarketing', function () {
    return view('marketing.dashmarketing');
});
Route::get('/vendor', function () {
    return view('marketing.vendor');
});
Route::get('/addvendor', function () {
    return view('marketing.addvendor');
});
Route::get('/pakettour', function () {
    return view('marketing.pakettour');
});

Route::get('/formpesanBaliA', function () {
    return view('cust.formpesanBaliA');
});

Route::get('/detailbaliB', function () {
    return view('cust.detailbaliB');
});

Route::get('/detailsemarangB', function () {
    return view('cust.detailsemarangB');
});

Route::get('/detailmalangB', function () {
    return view('cust.detailmalangB');
});

Route::get('/infoBaliA', function () {
    return view('cust.infoBaliA');
});

Route::get('/infobaliB', function () {
    return view('cust.infobaliB');
});

Route::get('/formpesanBaliB', function () {
    return view('cust.formpesanBaliB');
});

Route::get('/infomalangA', function () {
    return view('cust.infomalangA');
});

Route::get('/formpesanmalangA', function () {
    return view('cust.formpesanmalangA');
});

Route::get('/infomalangB', function () {
    return view('cust.infomalangB');
});

Route::get('/formpesanmalangB', function () {
    return view('cust.formpesanmalangB');
});

Route::get('/infosemarangB', function () {
    return view('cust.infosemarangB');
});

Route::get('/formpesansemarangB', function () {
    return view('cust.formpesansemarangB');
});

Route::get('/infosemarangA', function () {
    return view('cust.infosemarangA');
});

Route::get('/formpesansemarangA', function () {
    return view('cust.formpesansemarangA');
});

Route::get('/formpesanbandung', function () {
    return view('cust.formpesanbandung');
});

Route::get('/formpesandieng', function () {
    return view('cust.formpesandieng');
});

Route::get('/formpesankarimun', function () {
    return view('cust.formpesankarimun');
});

Route::get('/formpesanlabuan', function () {
    return view('cust.formpesanlabuan');
});
Route::get('/formpesanraja', function () {
    return view('cust.formpesanraja');
});

Route::get('/infodieng', function () {
    return view('cust.infodieng');
});
Route::get('/infolabuan', function () {
    return view('cust.infolabuan');
});
Route::get('/infolombok', function () {
    return view('cust.infolombok');
});
Route::get('/infobandung', function () {
    return view('cust.infobandung');
});
Route::get('/infokarimun', function () {
    return view('cust.infokarimun');
});
Route::get('/inforajaampat', function () {
    return view('cust.inforajaampat');
=======
    return view('detailrajaampat');
});

Route::get('/gallery', function () {
    return view('gallery');
>>>>>>> Stashed changes
});