<?php

namespace App\Http\Controllers;

use App\Models\Home_Section5;
use Illuminate\Http\Request;

class HomeSection5Controller extends Controller
{
    public function index()
    {
        $section5_all_data = Home_Section5::all(); // Retrieve all data
        return view('admin.home.section5', compact('section5_all_data'));
    }
   

    public function create(Request $request)
    {
        $data = new Home_Section5();
        $image1 = $request->file('first_image');
        $imagename1 = time() . uniqid() . '.' . $image1->getClientOriginalExtension();
        $image1->move('image', $imagename1);
        $data->first_image = $imagename1;

        $data->title = $request->first_text;
        $data->cut_price = $request->second_text;
        $data->price = $request->third_text;
        $data->button_text = $request->fourth_text;

        $image2 = $request->file('second_image');
        $imagename2 = time() . uniqid() . '.' . $image2->getClientOriginalExtension();
        $image2->move('image', $imagename2);
        $data->second_image = $imagename2;

      
        $data->save();
        return redirect()->route('home_section5.index');
    }

    public function read()
    {
        $section5_all_data = Home_Section5::all();
        // dd($section2_all_data);
        return view('admin.home.section5', compact('section5_all_data'));
    }

    public function delete($id)
    {
        $data = Home_Section5::find($id);
        $data->delete();
        return redirect()->route('home_section5.index');
}

public function edit($id)
{
    $section5_all_data = Home_Section5::all();
    $section5_edit = Home_Section5::find($id);

    if (!$section5_edit) {
        // Redirect back or display an error if the record doesn't exist
        return redirect()->route('home_section5.index')->with('error', 'Data not found.');
    }

    return view('admin.home.section5', compact('section5_all_data', 'section5_edit'));
}
   

    public function update(Request $request, $id)
    {
        $data = Home_Section5::find($id);
        $image1 = $request->file('first_image');
        if($image1) {
        $imagename1 = time() . uniqid() . '.' . $image1->getClientOriginalExtension();
        $image1->move('image', $imagename1);
        $data->first_image = $imagename1;
        } else {
            $data->first_image = null; // Optional: If you want to set it explicitly to null
        }
        $data->title = $request->first_text;
        $data->cut_price = $request->second_text;
        $data->price = $request->third_text;
        $data->button_text = $request->fourth_text;

        $image2 = $request->file('second_image');
        if ($image2) {
            $imagename2 = time() . uniqid() . '.' . $image2->getClientOriginalExtension();
            $image2->move('image', $imagename2);
            $data->second_image = $imagename2;
        } else {
            $data->second_image = null; // Optional: If you want to set it explicitly to null
        }
         
        $data->update();
        return redirect()->route('home_section5.index');
    }


 

}
