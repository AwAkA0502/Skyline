<?php

namespace App\Http\Controllers;

use App\Models\DesignPopular;
use Illuminate\Http\Request;

class DesignPopularController extends Controller
{
    public function update(Request $request)
{
    $request->validate([
        'title.*' => 'required|string|max:255',
        'description.*' => 'nullable|string',
        'image.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    foreach ($request->title as $id => $title) {
        $design = DesignPopular::find($id);
        if ($design) {
            $design->title = $title;
            $design->description = $request->description[$id];

            // Ubah 'image' menjadi 'path'
            if ($request->hasFile("image.$id")) {
                $imagePath = $request->file("image.$id")->store('post_images', 'public');
                $design->path = $imagePath; // Simpan di kolom 'path'
            }

            $design->save();
        }
    }

    return redirect()->back()->with('success', 'Desain populer berhasil diupdate.');
}

}

