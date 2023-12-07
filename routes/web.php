<?php

use App\Http\Controllers\ProfileController;
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

Route::group([
    'prefix' => 'admin',
    'middleware' => ['auth', 'is_admin'], 
    'as' => 'admin.'
], function() {
    // Admin Dashboard
    Route::get('/', function () {
        return view('admin/dashboard');
    })->name('dashboard');

    Route::group([
        'prefix' => 'listings',
        'as' => 'listings.'
    ], function() {
        // All Listings
        Route::get('/', [\App\Http\Controllers\Admin\ListingController::class, 'index'])->name('index');

        // Show All Listings
        Route::get('/{property_type}/{listing_type}/{city}', function () {
            return view('pages/listings');
        })->name('listings');

        // Create Listing
        Route::get('/create', [\App\Http\Controllers\Admin\ListingController::class, 'create'])->name('create');

        // Store Listing
        Route::post('/', [\App\Http\Controllers\Admin\ListingController::class, 'store'])->name('store');

        // Edit Listing
        Route::get('/{slug}/{id}/edit', [\App\Http\Controllers\Admin\ListingController::class, 'edit'])->name('edit');

        // Update Listing
        Route::put('/{slug}/{id}', [\App\Http\Controllers\Admin\ListingController::class, 'update'])->name
        ('update');

        // Delete Listing
        Route::get('/{slug}/{id}/delete', [\App\Http\Controllers\Admin\ListingController::class, 'destroy'])->name('destroy');

        // Listing Photos //

        // Show All Photos
        Route::get('/{slug}/{id}/photos', [\App\Http\Controllers\Admin\PhotoController::class, 'index'])->name('photos');
        
        // Add Photos
        Route::get('/{slug}/{id}/photos/create', [\App\Http\Controllers\Admin\PhotoController::class, 'create'])->name('photos.create');
        
        // Save Photos
        Route::post('/{slug}/{id}/photos', [\App\Http\Controllers\Admin\PhotoController::class, 'store'])->name('photos.store');
        
        // Delete Photo
        Route::get('/{slug}/{id}/photos/{photo_id}/delete}', [\App\Http\Controllers\Admin\PhotoController::class, 'destroy'])->name('photos.destroy');
        
        // Featured Photo
        Route::get('/{slug}/{id}/photos/{photo_id}/featured}', [\App\Http\Controllers\Admin\PhotoController::class, 'featured'])->name('photos.featured');
    });
});


// Homepage
Route::get('/', function () {
    return view('pages/home');
});

// Single Listing
Route::get('/listing/{slug}/{id}', [\App\Http\Controllers\Front\ListingController::class, 'show'])->name('frontlisting.show');

// Show All Listings
Route::get('/realestate/{property_type}/{listing_type?}/{state?}/{city?}/{zipcode?}', [\App\Http\Controllers\Front\ListingController::class, 'index'])->name('frontlisting.show');

// User Saved Listings
Route::get('/account', function () {
    return view('pages/saved-listings');
})->name('account');

// User Show Status
Route::get('/account/show-status', function () {
    return view('pages/show-status');
})->name('show-status');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
