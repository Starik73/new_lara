<?php

namespace App\Http\Controllers\Frontend\Blog;

use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Session::flash('error', '');
        $blogs = Post::all();
        return view('frontend.blog.index' , [
            'blogs' => $blogs
        ]);
    }

    public function view(Request $request)
    {
        // Session::flash('error', '');
        return view('frontend.blog.view');
    }
}
