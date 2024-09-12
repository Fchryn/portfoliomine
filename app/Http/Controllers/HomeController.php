<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home.portfolio');
    }

    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }
}
