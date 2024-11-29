<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Destination;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil data blog terbaru (misalnya, 3 blog terakhir)
        $blogs = Blog::latest()->take(3)->get();

        // Ambil data destinasi terbaru (misalnya, 4 destinasi)
        $destinations = Destination::latest()->take(4)->get();

        return view('index', compact('blogs', 'destinations'));
    }
}
