<?php

namespace App\Http\Controllers\Products\Detergents;

use App\Http\Controllers\Controller;
use App\Models\Products\Detergents\Detergents_Section3;
use Illuminate\Http\Request;

class DetergentSection3Controller extends Controller
{
    public function index()
    {
        $section3_all_data = Detergents_Section3::all(); // Retrieve all data
        return view('admin.product.detergents.section3', compact('section3_all_data'));
    }

    public function create(Request $request)
    {
        $section3 = new Detergents_Section3();
        $image = $request->file('my_image');
        if ($image) {
            $imagename1 = time() . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move('image', $imagename1);
            $section3->image = $imagename1;
        }
        $section3->first_text = $request->first_text;
        $section3->second_text = $request->second_text;
        $section3->third_text = $request->third_text;
       
        $section3->save();
        return redirect()->route('pds3.index');
    }

    public function read()
    {
        $section3_all_data = Detergents_Section3::all();
        return view('admin.product.detergents.section3', compact('section3_all_data'));
    }

    public function edit($id)
    {
        $section3_all_data = Detergents_Section3::all();
        $section3_edit = Detergents_Section3::find($id);
        return view('admin.product.detergents.section3', compact('section3_all_data', 'section3_edit'));
    }

    public function update(Request $request, $id)
    {
        $section3 = Detergents_Section3::find($id);
        $image = $request->file('my_image');
        if ($image) {
            $imagename1 = time() . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move('image', $imagename1);
            $section3->image = $imagename1;
        }
        $section3->first_text = $request->first_text;
        $section3->second_text = $request->second_text;
        $section3->third_text = $request->third_text;
       
        
        $section3->save();
        return redirect()->route('pds3.index');
    }

    public function delete($id)
    {
        $section3 = Detergents_Section3::find($id);
        $section3->delete();
        return redirect()->route('pds3.index');
    }
}
