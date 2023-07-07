<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function multiform()
    {
        return view('multi-form');
    }

    public function about_us()
    {
        return view('about-us');
    }
    public function faq()
    {
        return view('faq');
    }
    public function privacy()
    {
        return view('privacy');
    }
    public function terms_condition()
    {
        return view('terms');
    }

    public function contact_us()
    {
        return view('contact');
    }
    public function after_process()
    {
        return view('process');
    }

}
