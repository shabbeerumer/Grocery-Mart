<?php

namespace App\Http\Controllers\Products\Detergents;

use App\Http\Controllers\Controller;
use App\Models\Products\Detergents\Detergents_Section1;
use Illuminate\Http\Request;

class DetergentSection1Controller extends Controller
{
    public function index()
    {
        $section1_all_data = Detergents_Section1::all(); // Retrieve all data
        return view('admin.product.detergents.section1', compact('section1_all_data'));
    }

    public function create(Request $request)
    {
        $section1 = new Detergents_Section1();
        $section1->first_text = $request->first_text;
        $section1->second_text = $request->second_text;
        $section1->third_text = $request->third_text;
        $section1->save();
        return redirect()->route('pds1.index');
    }

    public function read()
    {
        $section1_all_data = Detergents_Section1::all();
        return view('admin.product.detergents.section1', compact('section1_all_data'));
    }

    public function edit($id)
    {
        $section1_all_data = Detergents_Section1::all();
        $section1_edit = Detergents_Section1::find($id);
        return view('admin.product.detergents.section1', compact('section1_all_data', 'section1_edit'));
    }

    public function update(Request $request, $id)
    {
        $section1 = Detergents_Section1::find($id);
        $section1->first_text = $request->first_text;
        $section1->second_text = $request->second_text;
        $section1->third_text = $request->third_text;
        $section1->save();
        return redirect()->route('pds1.index');
    }

    public function delete($id)
    {
        $section1 = Detergents_Section1::find($id);
        $section1->delete();
        return redirect()->route('pds1.index');
    }
}
