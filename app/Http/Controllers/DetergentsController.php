<?php

namespace App\Http\Controllers;

use App\Models\Products\Detergents\Detergents_Section1;
use App\Models\Products\Detergents\Detergents_Section2;
use App\Models\Products\Detergents\Detergents_Section3;
use App\Models\Products\Detergents\Detergents_Section4;
use Illuminate\Http\Request;

class DetergentsController extends Controller
{
    public function index()
    {
        $data1 = Detergents_Section1::orderBy('created_at', 'desc')->take(1)->get();
        $data2 = Detergents_Section2::orderBy('created_at', 'desc')->take(3)->get();
        $data3 = Detergents_Section3::orderBy('created_at', 'desc')->take(3)->get();
        $data4 = Detergents_Section4::all();

        return view('user.product_pages.Household.detergents', compact('data1', 'data2','data3', 'data4'));
    }
}
