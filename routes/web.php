<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DonationController;
use App\Http\Controllers\Admin\FooterController;
use App\Http\Controllers\Admin\NavbarController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\ContactFormController;
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
    Route::prefix('news')->name('news.')->group(function(){
        Route::get('',[NewsController::class, 'index'])->name('index');
        Route::match(['GET', 'POST'], 'add', [NewsController::class, 'add'])->name('add');
        Route::match(['GET', 'POST'], 'edit/{news}', [NewsController::class, 'edit'])->name('edit');
        Route::get('del/{news}', [NewsController::class, 'del'])->name('del');
    });
    Route::prefix('footer')->name('footer.')->group(function(){
        Route::get('', [FooterController::class, 'index'])->name('index');
        Route::match(['GET','POST'],'add',[FooterController::class, 'add'])->name('add');
        Route::match(['GET', 'POST'], 'edit/{footer}', [FooterController::class, 'edit'])->name('edit');
        Route::get('del/{footer}', [FooterController::class, 'del'])->name('del');
});
   Route::prefix('navbar')->name('navbar.')->group(function(){
    Route::get('',[NavbarController::class,'index'])->name('index');
    Route::match(['GET', 'POST'],'add',[NavbarController::class,'add'])->name('add');
    Route::match(['GET', 'POST'], 'edit/{navbar}', [NavbarController::class, 'edit'])->name('edit');
    Route::get('del/{navbar}',[NavbarController::class, 'del'])->name('del');
   });
   Route::prefix('contact')->name('contact.')->group(function(){
    Route::get('', [ContactController::class,'index'])->name('index');
    Route::match(['GET','POST'], 'add', [ContactController::class, 'add'])->name('add');
    Route::match(['GET','POST'], 'edit/{contact}', [ContactController::class, 'edit'])->name('edit');
    Route::get('del/{contact}',[ContactController::class, 'del'])->name('del');
   });
});
Route::name('front')->name('front.')->group(function () {
    Route::get('', [HomeController::class, 'index'])->name('index');
    Route::get('/events', [HomeController::class, 'events'])->name('events');
    Route::get('/news/{id}', [HomeController::class, 'news'])->name('news');
    Route::get('/contact',[HomeController::class, 'contact'])->name(('contact'));
    Route::get('contact/add',[ContactFormController::class,'add']);
    Route::post('/contact/save', [ContactFormController::class, 'save'])->name('contact.save');
});

