<?php

namespace App\Http\Controllers;

use App\Models\Home_Section2;
use Illuminate\Http\Request;

class HomeSection2Controller extends Controller
{
    // public function index()
    // {
    //     return view('admin.home.section2');
    // }

    public function index()
    {
        $section2_all_data = Home_Section2::all(); // Retrieve all data
        return view('admin.home.section2', compact('section2_all_data'));
    }

    public function create(Request $request)
    {
        $section2 = new Home_Section2();
    
        // Process the first image
        $image1 = $request->file('image1');
        $imagename1 = time() . uniqid() . '.' . $image1->getClientOriginalExtension();
        $image1->move('image', $imagename1);
        $section2->first_image = $imagename1;
    
        // Process the second image
        $image2 = $request->file('image2');
        
        $imagename2 = time() . uniqid() . '.' . $image2->getClientOriginalExtension();
        $image2->move('image', $imagename2);
        $section2->second_image = $imagename2;
    
        // Assign other form data to the model
        $section2->title = $request->title;
        $section2->cut_price = $request->cut_price;
        $section2->price = $request->price;
        $section2->button_text = $request->button_text;
        
        // Save the data
        $section2->save();
    
        return redirect()->route('home_section2.index');
    }
    


    public function read()
    {
        $section2_all_data = Home_Section2::all();
        // dd($section2_all_data);
        return view('admin.home.section2', compact('section2_all_data'));
    }


    public function edit($id)
    {
        $section2_all_data = Home_Section2::all();
        $section2_edit = Home_Section2::find($id);
        return view('admin.home.section2', compact('section2_all_data', 'section2_edit'));
    }

    public function update(Request $request, $id)
    {
        $section2 = Home_Section2::find($id);
      
        // Process the first image
        $image1 = $request->file('image1');
        $imagename1 = time() . uniqid() . '.' . $image1->getClientOriginalExtension();
        $image1->move('image', $imagename1);
        $section2->first_image = $imagename1;
    
        // Process the second image
        $image2 = $request->file('image2');
        $imagename2 = time() . uniqid() . '.' . $image2->getClientOriginalExtension();
        $image2->move('image', $imagename2);;
        $section2->second_image = $imagename2;
    
        $section2->title = $request->title;
        $section2->cut_price = $request->cut_price;
        $section2->price = $request->price;
        $section2->button_text = $request->button_text;
        $section2->save();
        return redirect()->route('home_section2.index');
    }

    public function delete($id)
    {
        $section2 = Home_Section2::find($id);
        $section2->delete();
        return redirect()->route('home_section2.index');
    }
}
