<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User; // Model Admin (ganti sesuai dengan model yang digunakan)

class CreateAdminController extends Controller
{
    public function index()
    {
        return view('admin.create-admin'); // Tampilan untuk halaman Create Admin
    }

    public function store(Request $request)
    {
        // Validasi dan penyimpanan data admin baru
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        return redirect()->route('admin.create-admin')->with('success', 'Admin created successfully.');
    }
}
