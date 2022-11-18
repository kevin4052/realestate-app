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
    'as' => 'admin.',
    'middleware' => ['auth', 'is_admin']
], function () {
    // admin dashboard
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::group([
        'prefix' => 'listings',
        'as' => 'listings.'
    ], function () {
        // listings
        Route::get('/', [\App\Http\Controllers\Admin\ListingController::class, 'index'])->name('index');
        Route::get('/create', [\App\Http\Controllers\Admin\ListingController::class, 'create'])->name('create');
        Route::post('/', [\App\Http\Controllers\Admin\ListingController::class, 'store'])->name('store');
        Route::get('/{slug}/{id}/edit', [\App\Http\Controllers\Admin\ListingController::class, 'edit'])->name('edit');
        Route::put('/{slug}/{id}', [\App\Http\Controllers\Admin\ListingController::class, 'update'])->name('update');
        Route::get('/{slug}/{id}/delete', [\App\Http\Controllers\Admin\ListingController::class, 'destroy'])->name('delete');

        // photos
        Route::get('/{slug}/{id}/photos', [\App\Http\Controllers\Admin\PhotoController::class, 'index'])->name('photos.index');
        Route::get('/{slug}/{id}/photos/create', [\App\Http\Controllers\Admin\PhotoController::class, 'create'])->name('photos.create');
        Route::post('/{slug}/{id}/photos', [\App\Http\Controllers\Admin\PhotoController::class, 'store'])->name('photos.store');
        Route::get('/{slug}/{id}/photos/{photo_id}/delete', [\App\Http\Controllers\Admin\PhotoController::class, 'destroy'])->name('photos.delete');
        Route::get('/{slug}/{id}/photos/{photo_id}/featured', [\App\Http\Controllers\Admin\PhotoController::class, 'featured'])->name('photos.featured');
    });

});

// public group
// Route::group([
//     'prefix' => 'public',
//     'as' => 'public.',
// ], function () {});

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
Route::get('/listing/{slug}/{id}', [\App\Http\Controllers\Front\ListingController::class, 'show'])->name('listings.show');
//show all listings
Route::get('/realestate/{property_type}/{listing_type?}/{state?}/{city?}/{zipcode?}', [\App\Http\Controllers\Front\ListingController::class, 'index'])->name('listings.index');

require __DIR__.'/auth.php';


