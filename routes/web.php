<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\PopularController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\SizeCategoryController;
use App\Http\Controllers\Admin\PricingController;
use App\Http\Controllers\FloorCategoryController;
use App\Http\Controllers\StyleCategoryController;
use App\Http\Controllers\Admin\HomepageController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\RealisasiController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\CreateAdminController;
use App\Http\Controllers\DesignPopularController;


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
        
        // Route::get('/dashboard/pages/home/category', [DashboardController::class, 'index'])->name('admin.dashboard.home.category');

        // Routes untuk HomePage
        Route::prefix('dashboard/pages/home')->group(function () {
            Route::post('design-populer', [DesignPopularController::class, 'update'])->name('design.populer.update');
            Route::get('popular', [DashboardController::class, 'homePopular'])->name('home.populer');


            
            Route::get('hero', [DashboardController::class, 'homeHero'])->name('home.hero');
            Route::get('category', [DashboardController::class, 'homeCategory'])->name('home.category');
            Route::post('style-category', [StyleCategoryController::class, 'store'])->name('category.store');
            Route::delete('style-category-del/{category}', [StyleCategoryController::class, 'destroy'])->name('categories.destroy');
            Route::post('style-category-up/{id}', [StyleCategoryController::class, 'update'])->name('categories.update');
            
            Route::post('size-category', [SizeCategoryController::class, 'store'])->name('size.category.store');
            Route::delete('size-category-del/{category}', [SizeCategoryController::class, 'destroy'])->name('size.categories.destroy');
            Route::post('size-category-up/{id}', [SizeCategoryController::class, 'update'])->name('size.categories.update');
            // Route::resource('categories', StyleCategoryController::class);
            // Route::post('categories-update/{category}', [StyleCategoryController::class, 'update'])->name('categories.update');
            
            Route::post('floor-category', [FloorCategoryController::class, 'store'])->name('floor.category.store');
            Route::delete('floor-category-del/{category}', [FloorCategoryController::class, 'destroy'])->name('floor.categories.destroy');
            Route::post('floor-category-up/{id}', [FloorCategoryController::class, 'update'])->name('floor.categories.update');
            // Route::resource('categories', StyleCategoryController::class);
            // Route::post('categories-update/{category}', [StyleCategoryController::class, 'update'])->name('categories.update');


            Route::get('3ddesain', [DashboardController::class, 'home3DDesain'])->name('home.3ddesain');
            Route::get('realization', [DashboardController::class, 'homeRealization'])->name('home.realization');
            Route::post('video-update/{id}', [RealisasiController::class, 'updatePost']);            
            Route::resource('realisasi', RealisasiController::class);
            Route::get('video', [DashboardController::class, 'homevideo'])->name('home.build-video');
            Route::get('price', [DashboardController::class, 'homePrice'])->name('home.price');
            Route::get('package', [DashboardController::class, 'homePackage'])->name('home.package');
            Route::get('about', [DashboardController::class, 'homeAbout'])->name('home.about');
            Route::get('client', [DashboardController::class, 'homeClient'])->name('home.client');
            Route::get('articel', [DashboardController::class, 'homeArticel'])->name('home.articel');
        });

        // Routes untuk Realization
        Route::prefix('dashboard/pages/realization')->group(function () {
            Route::get('banner', [DashboardController::class, 'realizationBanner'])->name('realization.banner');
            Route::get('realization', [DashboardController::class, 'realizationRealization'])->name('realization.realization');
            Route::get('project', [DashboardController::class, 'realizationProject'])->name('realization.project');
            Route::get('video', [DashboardController::class, 'realizationVideo'])->name('realization.video');
            Route::get('other', [DashboardController::class, 'realizationOther'])->name('realization.other');
            Route::get('category', [DashboardController::class, 'realizationCategory'])->name('realization.category');
        });

        // Routes untuk Blog
        Route::prefix('dashboard/pages/blog')->group(function () {
            Route::get('banner', [DashboardController::class, 'blogBanner'])->name('blog.banner');
            Route::get('latest', [DashboardController::class, 'blogLatest'])->name('blog.latest');
            Route::get('articel', [DashboardController::class, 'blogArticel'])->name('blog.articel');
            Route::get('like', [DashboardController::class, 'blogLike'])->name('blog.like');
        });

        // Routes untuk Blog Details
        Route::prefix('dashboard/pages/blog_details')->group(function () {
            Route::get('latest', [DashboardController::class, 'blogDetailsLatest'])->name('blog_details.latest');
            Route::get('articel', [DashboardController::class, 'blogDetailsArticel'])->name('blog_details.articel');
            Route::get('like', [DashboardController::class, 'blogDetailsLike'])->name('blog_details.like');
        });

        // Routes untuk Project Details
        Route::prefix('dashboard/pages/project_details')->group(function () {
            Route::get('latest', [DashboardController::class, 'projectDetailsLatest'])->name('project_details.latest');
            Route::get('articel', [DashboardController::class, 'projectDetailsArticel'])->name('project_details.articel');
            Route::get('like', [DashboardController::class, 'projectDetailsLike'])->name('project_details.like');
        });

        // Routes untuk Portofolio
        Route::prefix('dashboard/pages/portofolio')->group(function () {
            Route::get('banner', [DashboardController::class, 'portofolioBanner'])->name('portofolio.banner');
            Route::get('portofolios', [DashboardController::class, 'portofolioPortofolios'])->name('portofolio.portofolios');
            Route::get('videos', [DashboardController::class, 'portofolioVideos'])->name('portofolio.videos');
        });

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
