<?php

namespace App\Http\Controllers;

use App\Models\Home_Section3;
use Illuminate\Http\Request;

class HomeSection3Controller extends Controller
{
    public function index()
    {
        $section3_all_data = Home_Section3::all(); // Retrieve all data
        return view('admin.home.section3', compact('section3_all_data'));
    }

    public function create(Request $request)
    {
        $data = new Home_Section3();
        $image1 = $request->file('image1');
        $imagename1 = time() . uniqid() . '.' . $image1->getClientOriginalExtension();
        $image1->move('image', $imagename1);
        $data->first_image = $imagename1;
        $data->title = $request->title;
        $data->subtitle = $request->subtitle;
        $data->first_button_text = $request->first_button_text;
        $image2 = $request->file('image2');
        $imagename2 = time() . uniqid() . '.' . $image1->getClientOriginalExtension();
        $image2->move('image', $imagename2);
        $data->second_image = $imagename2;
        $data->second_button_text = $request->first_button_text;
        $data->save();
        return redirect()->route('home_section3.index');
    }

    public function read()
    {
        $section3_all_data = Home_Section3::all();
        // dd($section2_all_data);
        return view('admin.home.section3', compact('section3_all_data'));
    }

    public function delete($id)
    {
        $data = Home_Section3::find($id);
        $data->delete();
        return redirect()->route('home_section3.index');
}

public function edit($id)
{
    $section3_all_data = Home_Section3::all();
    $section3_edit = Home_Section3::find($id);

    if (!$section3_edit) {
        // Redirect back or display an error if the record doesn't exist
        return redirect()->route('home_section3.index')->with('error', 'Data not found.');
    }

    return view('admin.home.section3', compact('section3_all_data', 'section3_edit'));
}
   

    public function update(Request $request, $id)
    {
        $data = Home_Section3::find($id);
        $image1 = $request->file('image1');
        $imagename1 = time() . uniqid() . '.' . $image1->getClientOriginalExtension();
        $image1->move('image', $imagename1);
        $data->first_image = $imagename1;
        
        $data->title = $request->title;
        $data->subtitle = $request->subtitle;
        $data->first_button_text = $request->first_button_text;
        $image2 = $request->file('image2');
        $imagename2 = time() . '.' . $image1->getClientOriginalExtension();
        $image2->move('image', $imagename2);
        $data->second_image = $imagename2;
        $data->second_button_text = $request->first_button_text;
        $data->update();
        return redirect()->route('home_section3.index');
    }
}
