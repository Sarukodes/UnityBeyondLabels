<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DonationController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Front\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::prefix('admin')->name('admin.')->group(function () {
    Route::prefix('dashboard')->name('dashboard.')->group(function () {
    Route::get('', [DashboardController::class, 'index'])->name('index');
    });

    Route::prefix('slider')->name('slider.')->group(function () {
        Route::get('', [SliderController::class, 'index'])->name('index');
        Route::match(['GET', 'POST'], 'add', [SliderController::class, 'add'])->name('add');
        Route::match(['GET', 'POST'], 'edit/{slider}', [SliderController::class, 'edit'])->name('edit');
        Route::get('del/{slider}', [SliderController::class, 'del'])->name('del');
    });
    Route::prefix('services')->name('services.')->group(function(){
        Route::get('',[ServiceController::class, 'index'])->name('index');
        Route::match(['GET', 'POST'], 'add', [ServiceController::class, 'add'])->name('add');
        Route::match(['GET', 'POST'], 'edit/{service}', [ServiceController::class, 'edit'])->name('edit');
        Route::get('del/{service}', [ServiceController::class, 'del'])->name('del');
    });
    Route::prefix('donation')->name('donation.')->group(function(){
        Route::get('',[DonationController::class, 'index'])->name('index');
        Route::match(['GET', 'POST'], 'add', [DonationController::class, 'add'])->name('add');
        Route::match(['GET', 'POST'], 'edit/{donation}', [DonationController::class, 'edit'])->name('edit');
        Route::get('del/{donation}', [DonationController::class, 'del'])->name('del');
    });
});

Route::name('front')->name('front.')->group(function () {
    Route::get('', [HomeController::class, 'index'])->name('index');
});

