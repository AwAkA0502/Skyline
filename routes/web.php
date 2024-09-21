<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\PricingController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\RealisasiController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\CreateAdminController;
use App\Http\Controllers\Admin\HomepageController;

Route::prefix('admin')->group(function () {
    // Rute login/logout admin
    Route::get('/login', [App\Http\Controllers\Admin\Auth\LoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [App\Http\Controllers\Admin\Auth\LoginController::class, 'login']);
    Route::post('/logout', [App\Http\Controllers\Admin\Auth\LoginController::class, 'logout'])->name('admin.logout');

    // Hanya admin yang terautentikasi yang dapat mengakses rute di bawah ini
    Route::middleware('auth:admin')->group(function () {
        
        // Rute untuk dashboard admin
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

        // Rute untuk mengelola section di homepage (Populer Design, Design 3D, Realisasi Pembangunan, Video Pembangunan, Contact)
        Route::get('/dashboard/homepage/{section}', [HomepageController::class, 'section'])->name('admin.dashboard.homepage');
        Route::post('/dashboard/homepage/{section}', [HomepageController::class, 'store'])->name('admin.dashboard.homepage.store');
        Route::post('/admin/dashboard/homepage/design_popular/store', [App\Http\Controllers\Admin\HomePageController::class, 'storeDesignPopuler'])
        ->name('admin.dashboard.homepage.design_popular.store');
        Route::delete('/admin/dashboard/homepage/design_popular/delete', [App\Http\Controllers\Admin\HomePageController::class, 'deleteSelectedCards'])
        ->name('admin.dashboard.homepage.design_popular.delete');
        Route::post('/admin/dashboard/homepage/design_popular/store/{card}', [App\Http\Controllers\Admin\HomePageController::class, 'storeDesignPopuler'])
        ->name('admin.dashboard.homepage.design_popular.store');

        Route::delete('/admin/dashboard/homepage/design_popular/delete', [App\Http\Controllers\Admin\HomePageController::class, 'deleteCard'])
        ->name('admin.dashboard.homepage.design_popular.delete');
        Route::delete('/admin/dashboard/homepage/design_popular/delete', [HomePageController::class, 'deleteDesignPopular'])
        ->name('admin.dashboard.homepage.design_popular.delete');

        // Rute untuk membuat admin baru
        Route::get('/dashboard/create-admin', [App\Http\Controllers\Admin\CreateAdminController::class, 'index'])->name('admin.dashboard.create-admin');
    });
});

Route::get('/', [HomePageController::class, 'showHomePage'])->name('home');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/realisasi', function () {
    return view('realisasi');
})->name('realisasi');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/admin', function () {
    return view('admin.login');
})->name('admin');

Route::get('/404', function () {
    return view('error.404');
})->name('404');
