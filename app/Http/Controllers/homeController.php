<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\notice;
class homeController extends Controller
{
    public function index()
    {
        $data['notice'] = notice::orderBy('id', 'desc')->where('isFeatured','=','yes')->limit(8)->get();
       
        return view('user.home',$data);
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
        $data['notice'] = notice::orderBy('id', 'desc')->paginate(15);
        return view('user.notice',$data);
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
