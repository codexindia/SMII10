<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notice;
use App\Models\Courses;

class homeController extends Controller
{
    public function index()
    {
        $data['notice'] = Notice::orderBy('id', 'desc')->where('isFeatured', '=', 'yes')->limit(8)->get();

        return view('user.home', $data);
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
        $data['notice'] = Notice::orderBy('id', 'desc')->paginate(15);
        return view('user.notice', $data);
    }
    public function faculty()
    {
        return view('user.faculty');
    }
    public function courses(Request $request)
    {
        if ($request->filter == null)
            $data['courses'] = Courses::get();
        else
            $data['courses'] = Courses::orderBy('id', 'desc')->where('category', $request->filter)->get();
        return view('user.course',$data);
    }
}
