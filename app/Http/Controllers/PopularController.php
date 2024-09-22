<?php

namespace App\Http\Controllers;

use App\Models\PopularDesign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PopularController extends Controller
{
    // Method untuk menampilkan halaman edit atau index
    public function index()
    {
        // Logika untuk menampilkan halaman index atau edit, misalnya:
        $popularDesigns = PopularDesign::all(); // Mengambil semua data dari tabel
        return view('admin.popular.index', compact('popularDesigns')); // Pastikan route dan view sesuai
    }

    // Method untuk mengupdate atau membuat data desain populer
    public function update(Request $request)
{
    // Validasi input
    $request->validate([
        'title.*' => 'required|string|max:255',
        'description.*' => 'required|string|max:255',
        'image.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Iterasi setiap desain populer yang dikirimkan
    foreach ($request->title as $id => $title) {
        // Cari data desain populer berdasarkan ID
        $design = PopularDesign::find($id);
        if ($design) {
            $design->title = $title;
            $design->description = $request->description[$id];

            // Jika ada file gambar baru, maka update gambar
            if ($request->hasFile("image.$id")) {
                $image = $request->file("image.$id");
                $path = $image->store('post_images', 'public'); // Simpan ke folder 'post_images' di storage
                $design->image = $path;
            }

            // Simpan perubahan ke database
            $design->save();
        }
    }

    return redirect()->route('home.popular')->with('success', 'Desain populer berhasil diperbarui.');
}

}

