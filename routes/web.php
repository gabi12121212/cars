<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Cars\ModelController;
use App\Http\Controllers\Cars\ModelsController;
use App\Http\Controllers\Cars\BrandsController;
use App\Http\Controllers\Cars\BrandController;
use App\Http\Controllers\Cars\CarController;
use App\Http\Controllers\Cars\CarsController;
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

Route::group(['prefix' => '/cars/', 'as' => 'cars.'], function () {

    Route::get('/cars/list', [CarsController::class, 'list'])->name('list');

    Route::get('/cars/show/{id}', [CarController::class, 'show'])->name('show');
    Route::delete('destroy/{id}', [CarController::class, 'destroy'])->name('destroy');
});

Route::group(['prefix' => '/brands/', 'as' => 'brands.'], function () {

    Route::get('/brands/list', [BrandsController::class, 'list'])->name('list');

    Route::delete('destroy/{id}', [BrandController::class, 'destroy'])->name('destroy');
});

Route::group(['prefix' => '/models/', 'as' => 'models.'], function () {

    Route::get('/models/list', [ModelsController::class, 'list'])->name('list');

    Route::delete('destroy/{id}', [ModelController::class, 'destroy'])->name('destroy');
});



Route::get('/{any}', [HomeController::class, 'homePage'])->where('any', '.*');
