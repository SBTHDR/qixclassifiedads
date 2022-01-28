<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ChildCategoryController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\StateController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Frontend\ListingController as FrontendListingController;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\ListingController;
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


Route::get('/', [FrontendListingController::class, 'welcome'])->name('welcome');
Route::get('/all-listings', [FrontendListingController::class, 'index'])->name('all-listings');
Route::get('/all-listings/{listing}', [FrontendListingController::class, 'show'])->name('all-listings.show');

Route::post('/listing-inquiry/{id}', [ContactController::class, 'listingInquiry'])->name('listing-inquiry');

Route::get('/pricing', [PageController::class, 'pricing'])->name('pricing');
Route::get('/contact/{id}', [PageController::class, 'contact'])->name('contact');
Route::get('/about', [PageController::class, 'about'])->name('about');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::resource('/listings', ListingController::class);
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::resource('/categories', CategoryController::class);
    Route::resource('/subcategories', SubCategoryController::class);
    Route::resource('/childcategories', ChildCategoryController::class);
    
    Route::resource('/countries', CountryController::class);
    Route::resource('/states', StateController::class);
    Route::resource('/cities', CityController::class);
});
