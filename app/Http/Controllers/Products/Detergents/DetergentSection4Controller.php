<?php

namespace App\Http\Controllers\Products\Detergents;

use App\Http\Controllers\Controller;
use App\Models\Products\Detergents\Detergents_Section4;
use Illuminate\Http\Request;

class DetergentSection4Controller extends Controller
{
    public function index()
    {
        $section4_all_data = Detergents_Section4::all(); // Retrieve all data
        return view('admin.product.detergents.section4', compact('section4_all_data'));
    }

    public function create(Request $request)
    {
        $section4 = new Detergents_Section4();
        $image = $request->file('first_image');
        if ($image) {
            $imagename1 = time() . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move('image', $imagename1);
            $section4->first_image = $imagename1;
        }
        $image = $request->file('second_image');
        if ($image) {
            $imagename1 = time() . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move('image', $imagename1);
            $section4->second_image = $imagename1;
        }
        $section4->first_text = $request->first_text;
        $section4->cut_text = $request->cut_text;

        $section4->second_text = $request->second_text;
       
        $section4->save();
        return redirect()->route('pds4.index');
    }

    public function read()
    {
        $section4_all_data = Detergents_Section4::all();
        return view('admin.product.detergents.section4', compact('section4_all_data'));
    }

    public function edit($id)
    {
        $section4_all_data = Detergents_Section4::all();
        $section4_edit = Detergents_Section4::find($id);
        return view('admin.product.detergents.section4', compact('section4_all_data', 'section4_edit'));
    }

    public function update(Request $request, $id)
    {
        $section4 = Detergents_Section4::find($id);
        $image = $request->file('first_image');
        if ($image) {
            $imagename1 = time() . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move('image', $imagename1);
            $section4->first_image = $imagename1;
        }
        $image = $request->file('second_image');
        if ($image) {
            $imagename1 = time() . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move('image', $imagename1);
            $section4->second_image = $imagename1;
        }
        $section4->first_text = $request->first_text;
        $section4->cut_text = $request->cut_text;

        $section4->second_text = $request->second_text;
       
        
        $section4->save();
        return redirect()->route('pds4.index');
    }

    public function delete($id)
    {
        $section4 = Detergents_Section4::find($id);
        $section4->delete();
        return redirect()->route('pds4.index');
    }
    public function stc(Request $request)
    {
        $section4 = new Detergents_Section4();
        $section4->first_text = $request->first_text;
        $section4->save();
        return redirect()->back();
    }
}
