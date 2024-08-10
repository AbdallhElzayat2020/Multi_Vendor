<?php


use App\Http\Controllers\Dashboard\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\CategoriesController;
use App\Http\Controllers\Dashboard\DashboardController;


Route::group(
    [
        'prefix' => 'dashboard',
        'as' => 'dashboard.',
        'middleware' => ['auth', 'verified']
    ],
    function () {
        Route::resource('categories', CategoriesController::class);

        Route::resource('products', ProductController::class);

        Route::get('dashboard', [DashboardController::class, 'index'])
            ->name('dashboard');
    }
);


//second Way to make RouteGroup
//Route::middleware('auth')->as('dashboard.')->prefix('dashboard')->group(function () {
//    Route::get('/', [DashboardController::class, 'index'])
//        ->name('dashboard');
//});
