<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Dashboard\AdminController;
use App\Http\Controllers\Dashboard\Auth\AuthController;
use App\Http\Controllers\Dashboard\Auth\ForgotPasswordController;
use App\Http\Controllers\Dashboard\BenefactorController;
use App\Http\Controllers\Dashboard\CategoryController as DashboardCategoryController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\OrphanController;
use App\Http\Controllers\Dashboard\StatusController;
use App\Http\Controllers\Front\Auth\AuthController as AuthAuthController;
use App\Http\Controllers\Front\CategoryController as FrontCategoryController;
use App\Http\Controllers\Front\EventController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\OrphanController as FrontOrphanController;
use App\View\Components\Front;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
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




Route::group(
    [
        'prefix' => 'dashboard/',
    ], function(){ //...
    Route::get('login', [AuthController::class,'loginForm'])->name('login.form');
    Route::post('login',[AuthController::class, 'login'])->name('login');
    Route::post('logout', [AuthController::class,'logout'])->name('logout');
  });


//dashboard
Route::group(
    [
        'prefix' => '/dashboard',
      //,'checkusertype:admin'
        'middleware' => [ 'auth']


    ], function(){ //...
        Route::get('/', [DashboardController::class,'index'])->name('dashboard');
         Route::resource('/admin', AdminController::class)->names('user');
         Route::resource('/benefactor', BenefactorController::class)->names('benefactor');
         Route::resource('/event', EventController::class)->names('event');
         Route::resource('/orphan', OrphanController::class)->names('orphan');
         Route::resource('/category', DashboardCategoryController::class)->names('category');
         Route::resource('/status', StatusController::class)->names('status');
    });

//Front Route
require __DIR__.'/front.php';
