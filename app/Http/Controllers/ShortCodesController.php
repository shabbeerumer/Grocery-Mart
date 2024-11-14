<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShortCodesController extends Controller
{
    public function index()
    {
        return view('user.pages.shortcodes');
    }
}
