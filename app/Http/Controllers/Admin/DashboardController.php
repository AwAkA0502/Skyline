<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.index'); // Tampilan untuk dashboard utama
    }

    public function homePage()
    {
        return view('admin.home-page'); // Tampilan untuk halaman Home Page
    }
}
