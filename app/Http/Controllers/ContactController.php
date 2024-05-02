<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function show()
    {
        return view('contact.show'); 
    }

    public function submit(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        return redirect()->route('contact.show')->with('success', 'Your message has been sent successfully!');
    }
}
