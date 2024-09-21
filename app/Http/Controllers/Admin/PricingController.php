<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PricingController extends Controller
{
    public function index()
    {
        return view('admin.pricing'); // Tampilan untuk halaman Pricing
    }
}
