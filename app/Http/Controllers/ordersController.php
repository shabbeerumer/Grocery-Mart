<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ordersController extends Controller
{
    public function index()
    {
        return view('admin.orders');
    }
}
