<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function carier()
    {
        return view('page.carier');
    }

    public function about()
    {
        return view('page.about');
    }

    public function blog()
    {
        return view('page.blog');
    }

    public function home()
    {
        return view('page.home');
    }
}
