<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function login()
    {
        return view('pages.auth.login');
    }
    public function register()
    {
        return view('pages.auth.register');
    }
    public function forgotpass()
    {
        return view('pages.auth.forgotpass');
    }
    public function newpass()
    {
        return view('pages.auth.newpass');
    }
}
