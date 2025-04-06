<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function login()
    {
        return view('admin.auth.login');
    }
    public function loginSubmit(Request $request)
    {
       $request->validate([
            'username' => 'required|email',
            'password' => 'required|min:6',
        ]);
        // Handle the login logic here
        // Validate the request, authenticate the user, etc.
        // Redirect to the dashboard or show an error message
    }
    public function dashboard()
    {
       return view('admin.dashboard');
    }
}
