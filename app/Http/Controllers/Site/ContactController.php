<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('site.contact.index');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Here you can handle the form submission, e.g., save to database or send an email

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
