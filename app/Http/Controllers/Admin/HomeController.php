<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Destination;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $destinationsCount = Destination::count();
        $blogsCount = Blog::count();

        return view('admin.home', compact('destinationsCount', 'blogsCount'));
    }
}
