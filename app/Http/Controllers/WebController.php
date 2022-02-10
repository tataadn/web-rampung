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

    public function scholarship()
    {
        return view('page.scholarship');
    }

    public function academy()
    {
        return view('page.academy');
    }

    public function solution()
    {
        return view('page.solution');
    }

    public function course()
    {
        return view('page.course');
    }

    public function training()
    {
        return view('page.training');
    }

    public function mentorship()
    {
        return view('page.mentorship');
    }
}
