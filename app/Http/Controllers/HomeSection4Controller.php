<?php

namespace App\Http\Controllers;

use App\Models\Home_Section4;
use Illuminate\Http\Request;

class HomeSection4Controller extends Controller
{
    public function index()
    {
        $section4_all_data = Home_Section4::all(); // Retrieve all data
        return view('admin.home.section4', compact('section4_all_data'));
    }
   

    public function create(Request $request)
    {
        $data = new Home_Section4();
        $image1 = $request->file('first_image');
        $imagename1 = time() . uniqid() . '.' . $image1->getClientOriginalExtension();
        $image1->move('image', $imagename1);
        $data->first_image = $imagename1;

        $data->first_text = $request->first_text;
        $data->second_text = $request->second_text;
        $data->third_text = $request->third_text;
        $data->fourth_text = $request->fourth_text;

        $image2 = $request->file('second_image');
        $imagename2 = time() . uniqid() . '.' . $image2->getClientOriginalExtension();
        $image2->move('image', $imagename2);
        $data->second_image = $imagename2;

        $image3 = $request->file('third_image');
        $imagename3 = time() . uniqid() . '.' . $image3->getClientOriginalExtension();
        $image3->move('image', $imagename3);
        $data->third_image = $imagename3;
        $data->save();
        return redirect()->route('home_section4.index');
    }

    public function read()
    {
        $section3_all_data = Home_Section4::all();
        // dd($section2_all_data);
        return view('admin.home.section4', compact('section4_all_data'));
    }

    public function delete($id)
    {
        $data = Home_Section4::find($id);
        $data->delete();
        return redirect()->route('home_section4.index');
}

public function edit($id)
{
    $section4_all_data = Home_Section4::all();
    $section4_edit = Home_Section4::find($id);

    if (!$section4_edit) {
        // Redirect back or display an error if the record doesn't exist
        return redirect()->route('home_section4.index')->with('error', 'Data not found.');
    }

    return view('admin.home.section4', compact('section4_all_data', 'section4_edit'));
}
   

    public function update(Request $request, $id)
    {
        $data = Home_Section4::find($id);
        $image1 = $request->file('first_image');
        if($image1) {
        $imagename1 = time() . uniqid() . '.' . $image1->getClientOriginalExtension();
        $image1->move('image', $imagename1);
        $data->first_image = $imagename1;
        } else {
            $data->first_image = null; // Optional: If you want to set it explicitly to null
        }
        $data->first_text = $request->first_text;
        $data->second_text = $request->second_text;
        $data->third_text = $request->third_text;
        $data->fourth_text = $request->fourth_text;
        $image2 = $request->file('second_image');
        if ($image2) {
            $imagename2 = time() . uniqid() . '.' . $image2->getClientOriginalExtension();
            $image2->move('image', $imagename2);
            $data->second_image = $imagename2;
        } else {
            $data->second_image = null; // Optional: If you want to set it explicitly to null
        }
        
        $image3 = $request->file('third_image');
        if ($image3) {
            $imagename3 = time() . uniqid() . '.' . $image3->getClientOriginalExtension();
            $image3->move('image', $imagename3);
            $data->third_image = $imagename3;
        } else {
            $data->third_image = null; // Optional: If you want to set it explicitly to null
        }
        
        $data->update();
        return redirect()->route('home_section4.index');
    }
}
