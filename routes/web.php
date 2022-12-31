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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get("index",[\App\Http\Controllers\pageController::class,"index"]);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get("/",[\App\Http\Controllers\pageController::class,"homepage"])->name("mainpage");

Route::resource('services',\App\Http\Controllers\servicesController::class)->middleware(['auth']);
Route::resource('clients',\App\Http\Controllers\clientsController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
Route::get("index",[\App\Http\Controllers\pageController::class,"index"]);


// Route::group(['prefix' => 'admin'], function () {
//     Voyager::routes();
// });

// Route::get("homepage",[\App\Http\Controllers\pageController::class,"homepage"]);

// Route::resource('services',\App\Http\Controllers\servicesController::class);
// Route::resource('clients',\App\Http\Controllers\clientsController::class);