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
        $data = about::skip(6)->take(2)->get();
        return view('pages.about.mycertificates', compact('data'));
    }

    public function detailprojects($id)
    {
        $data = about::find($id);
        return view('pages.about.detailprojects', compact('data'));
    }

    public function mypapers()
    {
        $data = about::skip(8)->take(2)->get();
        return view('pages.about.mypapers', compact('data'));
    }
}
