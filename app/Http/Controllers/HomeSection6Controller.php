<?php

namespace App\Http\Controllers;

use App\Models\Home_Section6;
use Illuminate\Http\Request;

class HomeSection6Controller extends Controller
{
    public function index()
    {
        $section6_all_data = Home_Section6::all(); // Retrieve all data
        return view('admin.home.section6', compact('section6_all_data'));
    }
   

    public function create(Request $request)
    {
        $data = new Home_Section6();
        $data->main_text = $request->main_text;
        $image1 = $request->file('first_image');
        $imagename1 = time() . uniqid() . '.' . $image1->getClientOriginalExtension();
        $image1->move('image', $imagename1);
        $data->first_image = $imagename1;


        $data->save();
        return redirect()->route('home_section6.index');
    }

    public function read()
    {
        $section6_all_data = Home_Section6::all();
        // dd($section2_all_data);
        return view('admin.home.section6', compact('section6_all_data'));
    }

    public function delete($id)
    {
        $data = Home_Section6::find($id);
        $data->delete();
        return redirect()->route('home_section6.index');
}

public function edit($id)
{
    $section6_all_data = Home_Section6::all();
    $section6_edit = Home_Section6::find($id);

    if (!$section6_edit) {
        // Redirect back or display an error if the record doesn't exist
        return redirect()->route('home_section6.index')->with('error', 'Data not found.');
    }

    return view('admin.home.section6', compact('section6_all_data', 'section6_edit'));
}
   

    public function update(Request $request, $id)
    {
        $data = Home_Section6::find($id);
        $data->main_text = $request->main_text;

        $image1 = $request->file('first_image');
        if($image1) {
        $imagename1 = time() . uniqid() . '.' . $image1->getClientOriginalExtension();
        $image1->move('image', $imagename1);
        $data->first_image = $imagename1;
        } else {
            $data->first_image = null; // Optional: If you want to set it explicitly to null
        }
       
       
         
        $data->update();
        return redirect()->route('home_section6.index');
    }
}
