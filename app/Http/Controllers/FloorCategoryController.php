<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FloorCategory;

class FloorCategoryController extends Controller
{
    public function index(){
        
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Simpan kategori baru
        $category = new FloorCategory();
        $category->name = $request->input('name');
        $category->save();

        // Redirect ke halaman yang diinginkan dengan pesan sukses
        return back();
    }

    public function destroy($id)
    {
        // Cari kategori berdasarkan ID
        $category = FloorCategory::findOrFail($id);
        
        // Hapus kategori
        $category->delete();

        // Redirect kembali ke halaman index dengan pesan sukses
        return back()->with('success', 'Kategori berhasil dihapus!');
    }

    // Metode untuk memperbarui data kategori
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
    
        $category = FloorCategory::findOrFail($id);
        $category->name = $request->input('name');
        $category->save();
    
        // return redirect()->route('categories.index')->with('success', 'Kategori berhasil diperbarui!');
        return back();
    }
}
