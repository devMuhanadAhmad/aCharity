<?php

use App\Http\Controllers\Front\Auth\AuthController as AuthAuthController;
use App\Http\Controllers\Front\Auth\ForgotPasswordController;
use App\Http\Controllers\Front\CategoryController as FrontCategoryController;
use App\Http\Controllers\Front\EventController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\OrphanController as FrontOrphanController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
/*
|--------------------------------------------------------------------------
| Front Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () { //...
        Route::get('login', [AuthAuthController::class, 'loginForm'])->name('front.login.form');
        Route::post('login', [AuthAuthController::class, 'login'])->name('front.login');
        Route::get('register', [AuthAuthController::class, 'registerForm'])->name('front.register.form');
        Route::post('register', [AuthAuthController::class, 'register'])->name('front.register');
        Route::post('logout', [AuthAuthController::class, 'logout'])->name('front.logout');
    }
);

//Front Forgot Password Route

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],function () {
    Route::get('forget-password',[ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
    Route::post('forget-password',[ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
    Route::get('reset-password/{token}',[ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
    Route::post('reset-password',[ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');
});


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale().'/home',
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {
        Route::get('/', [HomeController::class, 'index'])->name('home');
        Route::get('/about', [HomeController::class, 'about'])->name('about');
        Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
        Route::get('/event', [EventController::class, 'allEventFrontShow'])->name('front.event.all');
        Route::get('/event/{id}', [EventController::class, 'singleEventFrontShow'])->name('front.event.show');
        Route::get('/orphans', [FrontOrphanController::class, 'allOrphanFrontShow'])->name('front.orphan.all');
        Route::get('/orphan/{id}', [FrontOrphanController::class, 'singleOrphanFrontShow'])->name('front.orphan.show');
        Route::get('/orphan', [FrontOrphanController::class, 'allemergenciesShow'])->name('front.emergencies.all');
        Route::get('/category', [FrontCategoryController::class, 'index'])->name('front.category');
    }
);
