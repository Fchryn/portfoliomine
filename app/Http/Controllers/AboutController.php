<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\about;
use Illuminate\Support\Facades\Session;
use App\Models\command;

class AboutController extends Controller
{
    public function about()
    {
        $data = about::take(6)->get();
        return view('pages.about.page', compact('data'));
    }

    public function myprojects()
    {
        $data = about::take(6)->get();
        return view('pages.about.page', compact('data'));
    }

    public function mycertificates()
    {
        $data = about::skip(6)->take(1)->get();
        return view('pages.about.mycertificates', compact('data'));
    }

    public function detail($id)
    {
        $data = about::find($id);
        return view('pages.about.detail', compact('data'));
    }
}
