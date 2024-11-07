<?php

namespace App\Http\Controllers;

use App\Models\Home_Section1;
use App\Models\Home_Section2;
use App\Models\Home_Section3;
use App\Models\Home_Section4;
use App\Models\Home_Section5;
use App\Models\Home_Section6;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = Home_Section1::orderBy('created_at', 'desc')->take(1)->get();
        $data2 = Home_Section2::orderBy('created_at', 'desc')->take(12)->get();
        $data3 = Home_Section3::orderBy('created_at', 'desc')->take(1)->get();
        $data4 = Home_Section4::orderBy('created_at', 'desc')->take(1)->get();
        $data5 = Home_Section5::all();
        $data6 = Home_Section6::all();
        return view('user.home.home', compact('data', 'data2', 'data3', 'data4', 'data5', 'data6'));
    }

   
}
