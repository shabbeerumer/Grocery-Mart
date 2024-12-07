<?php

namespace App\Http\Controllers;

use App\Models\AboutUs\AboutUsSection1;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {
        $data1 = AboutUsSection1::all();
        return view('user.aboutus.aboutus',compact('data1'));
    }
}
