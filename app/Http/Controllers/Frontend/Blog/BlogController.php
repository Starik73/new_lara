<?php

namespace App\Http\Controllers\Frontend\Blog;

use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;

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
        return view('frontend.site.index');
    }

    public function info()
    {
        // Session::flash('error', '');
        return view('frontend.site.info');
    }

    public function game()
    {
        return view('frontend.site.game');
    }

    public function contact()
    {
        return view('frontend.site.contact');
    }
}
