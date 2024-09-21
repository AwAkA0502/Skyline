<?php

namespace App\Http\Controllers\Admin;

use App\Models\Homepage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomePageController extends Controller
{

    public function showHomePage()
    {
        // Mengambil data untuk setiap section di homepage
        $design_popular = Homepage::where('section', 'design_popular')->get();
        $design_3d = Homepage::where('section', 'design_3d')->get();
        $realisasi_pembangunan = Homepage::where('section', 'realisasi_pembangunan')->get();
        $video_pembangunan = Homepage::where('section', 'video_pembangunan')->get();
        $contact = Homepage::where('section', 'contact')->first();

        // Mengembalikan view home dengan data section
        return view('home', compact('design_popular', 'design_3d', 'realisasi_pembangunan', 'video_pembangunan', 'contact'));
    }
    public function deleteDesignPopular(Request $request)
{
    // Pastikan ada card yang dipilih untuk dihapus
    if ($request->has('delete_cards')) {
        // Hapus card berdasarkan ID yang dipilih
        Homepage::whereIn('id', $request->delete_cards)->delete();

        return redirect()->back()->with('success', 'Selected cards have been deleted!');
    }

    return redirect()->back()->with('error', 'No cards selected for deletion.');
}

    // Menampilkan HomePage untuk pengguna (frontend)
    public function showDesignPopular()
{
    $cards = Homepage::where('section', 'design_popular')->get();

    // Pastikan selalu ada 4 card, meskipun kosong
    $emptyCards = collect(range(0, 3))->map(function($index) {
        return (object)[
            'title' => '',
            'description' => '',
            'image' => null,
        ];
    });

    $cards = $emptyCards->merge($cards)->take(4); // Menggabungkan empty cards jika jumlahnya kurang dari 4

    return view('admin.dashboard.homepage.design_popular', compact('cards'));
}

    // Menampilkan halaman admin untuk mengelola Design Popular
    public function adminSection($section)
    {
        if ($section !== 'design_popular') {
            abort(404);
        }

        // Ambil card yang sudah ada untuk section 'design_popular'
        $cards = Homepage::where('section', $section)->get();

        return view("admin.dashboard.homepage.design_popular", compact('cards'));
    }

    public function section($section)
    {
        // Periksa jika view untuk section yang diminta tersedia
        if (view()->exists("admin.dashboard.homepage.$section")) {
            // Ambil data untuk section tertentu
            $cards = Homepage::where('section', $section)->get();
            return view("admin.dashboard.homepage.$section", compact('cards'));
        } else {
            abort(404); // Jika view tidak ditemukan, tampilkan error 404
        }
    }

    public function deleteCard(Request $request)
{
    $cardNumber = $request->input('card');

    // Hapus card yang sesuai
    Homepage::where('section', 'design_popular')->where('id', $cardNumber)->delete();

    return redirect()->back()->with('success', 'Card ' . $cardNumber . ' has been reset.');
}
    

    // Menyimpan data card dari form admin untuk Design Popular
    public function storeDesignPopuler(Request $request, $card)
{
    // Validasi input dari form
    $validatedData = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        'image' => 'nullable|image',
    ]);

    // Simpan atau update card berdasarkan nomor card yang dikirim
    $homepageCard = Homepage::updateOrCreate(
        ['section' => 'design_popular', 'id' => $card], // Kondisi untuk update
        [
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'image' => isset($validatedData['image']) ? $validatedData['image']->store('design_popular_images', 'public') : null,
        ]
    );

    return redirect()->back()->with('success', 'Card ' . $card . ' updated successfully!');
}

}