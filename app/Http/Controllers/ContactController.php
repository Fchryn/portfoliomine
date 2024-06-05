<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact.page');
    }
    public function insert(Request $request)
    {
        contact::create($request->all());
        return view('pages.contact.page');
    }
}
