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

// admin group
Route::group([
    'prefix' => 'admin',
    'as' => 'admin.'
], function () {
    // admin dashboard
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::group([
        'prefix' => 'listings',
        'as' => 'listings.'
    ], function () {
        // show all listings
        Route::get('/', [\App\Http\Controllers\Admin\ListingController::class, 'index'])->name('index');
        // create new listing
        Route::get('/create', [\App\Http\Controllers\Admin\ListingController::class, 'create'])->name('create');
        // store listing
        Route::post('/', [\App\Http\Controllers\Admin\ListingController::class, 'store'])->name('store');
        // edit listing
        Route::get('/{slug}/{id}/edit', [\App\Http\Controllers\Admin\ListingController::class, 'edit'])->name('edit');
        // update listing
        Route::put('/{slug}/{id}', [\App\Http\Controllers\Admin\ListingController::class, 'update'])->name('update');
        // delete listing
        Route::get('/{slug}/{id}/delete', [\App\Http\Controllers\Admin\ListingController::class, 'destroy'])->name('delete');
    });

});

Route::get('/', function () {
    return view('pages.home');
});

// user saved listings
Route::get('/account', function () {
    return view('pages.saved-listings');
})->name('account');

// user showing status
Route::get('/account/show-status', function () {
    return view('pages.show-status');
})->name('show-status');

//single listing
Route::get('/listing/{slug}/{id}', function () {
    return view('pages.single-listing');
});

//show all listings
Route::get('/{property_type}/{listing_type}/{city}', function () {
    return view('pages.listings');
})->name('listings');



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';


