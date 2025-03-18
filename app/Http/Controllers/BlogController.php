<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::with('user', 'comments', 'tags')->get();
        return view('pages.post.index', compact('posts'));
    }
}
