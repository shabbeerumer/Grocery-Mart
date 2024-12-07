<?php

namespace App\Http\Controllers;

use App\Models\ContactUs\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index(){
        return view('user.contactus.contactus');
    }

    public function create(Request $request)
    {
        $section1 = new ContactUs();
        $section1->name = $request->name;
        $section1->email = $request->email;
        $section1->subject = $request->subject;
        $section1->website_url = $request->website_url;
        $section1->message = $request->message;
        $section1->save();
        return redirect()->back();
    }
}
