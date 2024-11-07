<?php

namespace App\Http\Controllers\Products\Detergents;

use App\Http\Controllers\Controller;
use App\Models\Products\Detergents\Detergents_Section2;
use Illuminate\Http\Request;

class DetergentSection2Controller extends Controller
{
    public function index()
    {
        $section2_all_data = Detergents_Section2::all(); // Retrieve all data
        return view('admin.product.detergents.section2', compact('section2_all_data'));
    }

    public function create(Request $request)
    {
        $section2 = new Detergents_Section2();
        $section2->main_title = $request->main_title;
        $section2->first_text = $request->first_text;
        $section2->second_text = $request->second_text;
        $section2->third_text = $request->third_text;
        $section2->fourth_text = $request->fourth_text;
        $section2->fifth_text = $request->fifth_text;
        $section2->sixth_text = $request->sixth_text;
        $section2->seventh_text = $request->seventh_text;
        $section2->eighth_text = $request->eighth_text;
        $section2->save();
        return redirect()->route('pds2.index');
    }

    public function read()
    {
        $section2_all_data = Detergents_Section2::all();
        return view('admin.product.detergents.section2', compact('section2_all_data'));
    }

    public function edit($id)
    {
        $section2_all_data = Detergents_Section2::all();
        $section2_edit = Detergents_Section2::find($id);
        return view('admin.product.detergents.section2', compact('section2_all_data', 'section2_edit'));
    }

    public function update(Request $request, $id)
    {
        $section2 = Detergents_Section2::find($id);
        $section2->main_title = $request->main_title;
        $section2->first_text = $request->first_text;
        $section2->second_text = $request->second_text;
        $section2->third_text = $request->third_text;
        $section2->fourth_text = $request->fourth_text;
        $section2->fifth_text = $request->fifth_text;
        $section2->sixth_text = $request->sixth_text;
        $section2->seventh_text = $request->seventh_text;
        $section2->eighth_text = $request->eighth_text;
        
        $section2->save();
        return redirect()->route('pds2.index');
    }

    public function delete($id)
    {
        $section2 = Detergents_Section2::find($id);
        $section2->delete();
        return redirect()->route('pds2.index');
    }
}
