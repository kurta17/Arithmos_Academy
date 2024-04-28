<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Method to display the contact page
    public function show()
    {
        return view('contact.show'); // Assuming you have a blade file named show.blade.php in the contact directory
    }

    // Method to handle form submission
    public function submit(Request $request)
    {
        // Handle form submission logic here, such as sending an email
        
        // Redirect back to the contact page with a success message
        return redirect()->route('contact.show')->with('success', 'Your message has been sent successfully!');
    }
}
