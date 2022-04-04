<?php

namespace App\Http\Controllers\FrontEnd\Lesson;

use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class LessonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::select('select * from users where active = ?', [1]);
        $results = DB::select('select * from users where id = :id', ['id' => 1]);
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
