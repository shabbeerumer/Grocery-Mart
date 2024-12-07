<?php

namespace App\Http\Controllers\AboutUs;

use App\Http\Controllers\Controller;
use App\Models\AboutUs\AboutUsSection1;
use Illuminate\Http\Request;

class AboutUsSection1Controller extends Controller
{
    public function index()
    {
        $section1_all_data = AboutUsSection1::all(); // Retrieve all data
        return view('admin.AboutUs.section1', compact('section1_all_data'));
    }

    public function create(Request $request)
    {
        $section1 = new AboutUsSection1();
        $section1->title = $request->title;
        $section1->description = $request->description;
        $image = $request->file('image');
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $image->move('image', $imagename);
        $section1->image = $imagename;
        $section1->button_text = $request->button_text;
        $section1->save();
        return redirect()->route('aboutus_section1.index');
    }

    public function read()
    {
        $section1_all_data = AboutUsSection1::all();
        return view('admin.AboutUs.section1', compact('section1_all_data'));
    }

    public function edit($id)
    {
        $section1_all_data = AboutUsSection1::all();
        $section1_edit = AboutUsSection1::find($id);
        return view('admin.AboutUs.section1', compact('section1_all_data', 'section1_edit'));
    }

    public function update(Request $request, $id)
    {
        $section1 = AboutUsSection1::find($id);
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
        return redirect()->route('aboutus_section1.index');
    }

    public function delete($id)
    {
        $section1 = AboutUsSection1::find($id);
        $section1->delete();
        return redirect()->route('aboutus_section1.index');
    }
}
