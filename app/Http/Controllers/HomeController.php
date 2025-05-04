<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.home'); // Return a view file
    }

    //This method only use for testing purpose
    public function login()
    {
        return view('auth.login'); // Return a view file
    }
    public function signup()
    {
        return view('auth.signup'); // Return a view file
    }
    public function forgot_password()
    {
        return view('auth.forgot-password'); // Return a view file
    }
}
