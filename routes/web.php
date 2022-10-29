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

//landing page
Route::get('/', function () {
    return view('pages.home');
});

//user login
Route::get('/login', function () {
    return view('pages.login');
});

//user register
Route::get('/register', function () {
    return view('pages.register');
});

// user saved listings
Route::get('/account/saved', function () {
    return view('pages.saved-listings');
});

// user showing status
Route::get('/account/show-status', function () {
    return view('pages.show-status');
});

//single listing
Route::get('/listing/{slug}/{id}', function () {
    return view('pages.single-listing');
});

//show all listings
Route::get('/{property_type}/{listing_type}/{city}', function () {
    return view('pages.listings');
});
