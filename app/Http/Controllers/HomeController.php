<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{

    public function index()
    {
        return view('site/page/home/home');
    }

    public function r_and_d()  {
        return view('site/page/r&d');

    }
    public function auther_video()  {
        return view('site/page/video');

    }

    public function past_paper()  {
        return view('site/page/past_paper');

    }



}
