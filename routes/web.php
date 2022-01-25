<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ChildCategoryController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\StateController;
use App\Http\Controllers\Admin\SubCategoryController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('/categories', CategoryController::class);
Route::resource('/subcategories', SubCategoryController::class);
Route::resource('/childcategories', ChildCategoryController::class);

Route::resource('/countries', CountryController::class);
Route::get('/countries/{country}/add-state', [CountryController::class, 'add_state'])->name('add_state');
Route::post('/countries/{country}/add-state', [CountryController::class, 'add_state_store'])->name('add_state.store');
Route::resource('/states', StateController::class);
Route::resource('/cities', CityController::class);

Route::resource('/listings', ListingController::class);
