<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    // Metode untuk menangani permintaan Layouts Content
    public function getLayoutsContent(Request $request)
    {
        // Logika untuk mengambil data atau konten Layouts
        // $data = '<h2>Layouts Content</h2><p>This is the content for the Layouts section. Replace this with your actual content.</p>';
        $data = view('partials.layouts-content')->render();
        
        return response()->json(['content' => $data]);
    }

    // Metode untuk menangani permintaan Pages Content
    public function getPagesContent(Request $request)
    {
        // Logika untuk mengambil data atau konten Pages
        // $data = '<h2>Pages Content</h2><p>This is the content for the Pages section. Replace this with your actual content.</p>';
        $data = view('partials.pages-content')->render();

        return response()->json(['content' => $data]);
    }
}
