<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('admin.portfolio'); // Tampilan untuk halaman Portfolio
    }
}
