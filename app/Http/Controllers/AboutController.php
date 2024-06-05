<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\about;

class AboutController extends Controller
{
    public function index()
    {
        $data = about::all();
        return view('pages.about.page', compact('data'));
    }

    public function myprojects()
    {
        $data = about::all();
        return view('pages.about.page', compact('data'));
    }

    public function mycertificates()
    {
        $data = about::all();
        return view('pages.about.mycertificates', compact('data'));
    }

    public function detail($id)
    {
        $data = about::find($id);
        return view('pages.about.detail', compact('data'));
    }
}
