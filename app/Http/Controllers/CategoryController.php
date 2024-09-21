<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Simpan kategori baru
        $category = new Category();
        $category->name = $request->input('name');
        $category->save();

        // Redirect ke halaman yang diinginkan dengan pesan sukses
        return redirect()->route('category.store');
    }

    public function destroy($id)
    {
        // Cari kategori berdasarkan ID
        $category = Category::findOrFail($id);
        
        // Hapus kategori
        $category->delete();

        // Redirect kembali ke halaman index dengan pesan sukses
        return back()->with('success', 'Kategori berhasil dihapus!');
    }

    // Metode untuk memperbarui data kategori
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Cari kategori berdasarkan ID dan perbarui data
        $category = Category::findOrFail($id);
        $category->name = $request->input('name');
        $category->save();

        // Redirect kembali dengan pesan sukses
        return back()->with('success', 'Kategori berhasil diperbarui!');
    }
}
