<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
        return view('user.home');
    }
    public function about()
    {
        return view('user.about');
    }
    public function contact()
    {
        return view('user.contact');
    }
    public function comingsoon()
    {
        return view('user.coming-soon');
    }
    public function notice()
    {
        return view('user.notice');
    }
    public function faculty()
    {
        return view('user.faculty');
    }
    public function courses()
    {
        return view('user.course');
    }
}
