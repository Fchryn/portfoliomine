<?php

namespace App\Http\Controllers;

use App\Models\about;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function home()
    {
        return view('pages.admin.home.page');
    }

    public function Addhome()
    {
        return view('pages.admin.home.add');
    }

    public function Edithome()
    {
        return view('pages.admin.home.edit');
    }

    public function about()
    {
        $data = about::take(8)->get();
        return view('pages.admin.about.page', compact('data'));
    }

    public function Addabout()
    {
        return view('pages.admin.about.add');
    }

    public function Editabout()
    {
        return view('pages.admin.about.edit');
    }

    public function contact()
    {
        return view('pages.admin.contact.page');
    }

    public function Addcontact()
    {
        return view('pages.admin.contact.add');
    }

    public function Editcontact()
    {
        return view('pages.admin.contact.edit');
    }
}
