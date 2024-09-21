<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{

    public function getHomeHero(Request $request)
    {
        // Logika untuk mengambil data atau konten Pages
        // $data = '<h2>Home Hero</h2><p>Buat hero di home</p>';
        // $data = view('partials.pages-content')->render();

        // return response()->json(['content' => $data]);
        return view('partials.pages-content');
    }
}
