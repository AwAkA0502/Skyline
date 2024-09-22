<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\SizeCategory;
use Illuminate\Http\Request;
use App\Models\FloorCategory;
use App\Models\StyleCategory;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.pages.home.hero'); // Tampilan untuk dashboard utama
    }

    public function homePage()
    {
        return view('admin.home-page'); // Tampilan untuk halaman Home Page
    }

    // Metode untuk HomePage
    public function homeHero()
    {
        return view('admin.dashboard.pages.home.hero');
    }

    public function homeCategory()
    {
        $style_categories = StyleCategory::all();
        $size_categories = SizeCategory::all();
        $floor_categories = FloorCategory::all();
        return view('admin.dashboard.pages.home.category', compact('style_categories', 'size_categories', 'floor_categories'));
    }

    public function homePopular()
    {
        return view('admin.dashboard.pages.home.popular');
    }

    public function home3DDesain()
    {
        return view('admin.dashboard.pages.home.3ddesain');
    }

    public function homeRealization()
    {
        return view('admin.dashboard.pages.home.realization');
    }

    public function homePrice()
    {
        return view('admin.dashboard.pages.home.price');
    }

    public function homePackage()
    {
        return view('admin.dashboard.pages.home.package');
    }

    public function homeAbout()
    {
        return view('admin.dashboard.pages.home.about');
    }

    public function homeClient()
    {
        return view('admin.dashboard.pages.home.client');
    }

    public function homeArticel()
    {
        return view('admin.dashboard.pages.home.articel');
    }

    // Metode untuk Realization
    public function realizationBanner()
    {
        return view('admin.dashboard.pages.realization.banner');
    }

    public function realizationRealization()
    {
        return view('admin.dashboard.pages.realization.realization');
    }

    public function realizationProject()
    {
        return view('admin.dashboard.pages.realization.project');
    }

    public function realizationVideo()
    {
        return view('admin.dashboard.pages.realization.video');
    }

    public function realizationOther()
    {
        return view('admin.dashboard.pages.realization.other');
    }

    public function realizationCategory()
    {
        return view('admin.dashboard.pages.realization.category');
    }

    // Metode untuk Blog
    public function blogBanner()
    {
        return view('admin.dashboard.pages.blog.banner');
    }

    public function blogLatest()
    {
        return view('admin.dashboard.pages.blog.latest');
    }

    public function blogArticel()
    {
        return view('admin.dashboard.pages.blog.articel');
    }

    public function blogLike()
    {
        return view('admin.dashboard.pages.blog.like');
    }

    // Metode untuk Blog Details
    public function blogDetailsLatest()
    {
        return view('admin.dashboard.pages.blog_details.latest');
    }

    public function blogDetailsArticel()
    {
        return view('admin.dashboard.pages.blog_details.articel');
    }

    public function blogDetailsLike()
    {
        return view('admin.dashboard.pages.blog_details.like');
    }

    // Metode untuk Project Details
    public function projectDetailsLatest()
    {
        return view('admin.dashboard.pages.project_details.latest');
    }

    public function projectDetailsArticel()
    {
        return view('admin.dashboard.pages.project_details.articel');
    }

    public function projectDetailsLike()
    {
        return view('admin.dashboard.pages.project_details.like');
    }

    // Metode untuk Portofolio
    public function portofolioBanner()
    {
        return view('admin.dashboard.pages.portofolio.banner');
    }

    public function portofolioPortofolios()
    {
        return view('admin.dashboard.pages.portofolio.portofolios');
    }

    public function portofolioVideos()
    {
        return view('admin.dashboard.pages.portofolio.videos');
    }
}
