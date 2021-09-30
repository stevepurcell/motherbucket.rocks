<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request) {

        // Form validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'max:500',
         ]);

        //  Store data in database
        Contact::create($request->all());

        // 
        return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
    }
}
