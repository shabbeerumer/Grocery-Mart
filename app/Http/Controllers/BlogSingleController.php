<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogSingleController extends Controller
{
    public function index(){
        return view('user.pages.blogsingle');
    }
}
