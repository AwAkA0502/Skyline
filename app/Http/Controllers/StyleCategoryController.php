<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\StyleCategory;

class StyleCategoryController extends Controller
{
    public function index(){
        return view('admin.dashboard.pages.home.category');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Simpan kategori baru
        $category = new StyleCategory();
        $category->name = $request->input('name');
        $category->save();

        // Redirect ke halaman yang diinginkan dengan pesan sukses
        return back();
    }

    public function destroy($id)
    {
        // Cari kategori berdasarkan ID
        $category = StyleCategory::findOrFail($id);
        
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
    
        $category = StyleCategory::findOrFail($id);
        $category->name = $request->input('name');
        $category->save();
    
        // return redirect()->route('categories.index')->with('success', 'Kategori berhasil diperbarui!');
        return back();
    }
    
}
