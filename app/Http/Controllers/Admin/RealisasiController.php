<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RealisasiController extends Controller
{
    public function index()
    {
        return view('admin.realisasi'); // Tampilan untuk halaman Realisasi
    }
}
