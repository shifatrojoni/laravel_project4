<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function about()
    {

        return view('frontend.about');
    }
    public function blog()
    {
        return view('frontend.blog');
    }

    public function contact()
    {

        return view('frontend.contact');
    }


    public function service()
    {

        return view('frontend.services');
    }
    public function shop()
    {

        return view('frontend.shop');
    }
}
