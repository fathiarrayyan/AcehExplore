<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function show($id)
    {
        $blog = Blog::findOrFail($id);

        return view('blog.show', compact('blog'));
    }



}
