<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Project;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function capability()
    {
        return view('frontend.capability');
    }

    public function audioSystem()
    {
        return view('frontend.audio-system');
    }
}