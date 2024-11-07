<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeatController extends Controller
{
    public function index()
    {
        return view('user.product_pages.kitchen.meat');
    }
}
