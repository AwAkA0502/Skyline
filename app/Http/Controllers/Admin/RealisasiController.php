<?php

namespace App\Http\Controllers\admin;

use App\Models\Realisasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class RealisasiController extends Controller
{
    // Menampilkan halaman form dan tabel
    public function index()
    {
        // Mengambil semua data realisasi dari database
        $realisasis = Realisasi::all();

        // Mengirim data realisasi ke view home
        return view('home', compact('realisasis'));
    }

    // Menyimpan data dari form
    public function updatePost(Request $request, $id)
{
    $realisasi = Realisasi::find($id);

    if (!$realisasi) {
        return redirect()->back()->with('error', 'Data tidak ditemukan.');
    }

    $realisasi->link_youtube = $request->youtube_link;

    if ($request->hasFile('image')) {
        // Hapus gambar lama jika ada
        if ($realisasi->image && Storage::exists($realisasi->image)) {
            Storage::delete($realisasi->image);
        }

        // Simpan gambar baru
        $imagePath = $request->file('image')->store('public/images');
        $realisasi->image = str_replace('public/', 'storage/', $imagePath);
    }

    $realisasi->save();

    return redirect()->back()->with('success', 'Data berhasil diperbarui.');
}
}
