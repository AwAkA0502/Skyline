<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Homepage;

class UserHomeController extends Controller
{
    public function showHomePage()
    {
        $design_popular = Homepage::where('section', 'design_popular')->get();
        return view('home', compact('design_popular'));
    }
}