<?php

namespace App\Http\Controllers;

use App\Models\Home_Section1;
use Illuminate\Http\Request;

class HomeSection1Controller extends Controller
{
    public function index()
    {
        $section1_all_data = Home_Section1::all(); // Retrieve all data
        return view('admin.home.section1', compact('section1_all_data'));
    }

    public function create(Request $request)
    {
        $section1 = new Home_Section1();
        $section1->title = $request->title;
        $section1->description = $request->description;
        $image = $request->file('image');
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $image->move('image', $imagename);
        $section1->image = $imagename;
        $section1->button_text = $request->button_text;
        $section1->save();
        return redirect()->route('home_section1.index');
    }

    public function read()
    {
        $section1_all_data = Home_Section1::all();
        return view('admin.home.section1', compact('section1_all_data'));
    }

    public function edit($id)
    {
        $section1_all_data = Home_Section1::all();
        $section1_edit = Home_Section1::find($id);
        return view('admin.home.section1', compact('section1_all_data', 'section1_edit'));
    }

    public function update(Request $request, $id)
    {
        $section1 = Home_Section1::find($id);
        $section1->title = $request->title;
        $section1->description = $request->description;
        $image = $request->file('image');
        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $image->move('image', $imagename);
            $section1->image = $imagename;
        }
        $section1->button_text = $request->button_text;
        $section1->save();
        return redirect()->route('home_section1.index');
    }

    public function delete($id)
    {
        $section1 = Home_Section1::find($id);
        $section1->delete();
        return redirect()->route('home_section1.index');
    }
}
