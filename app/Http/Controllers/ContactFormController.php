<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactFormController extends Controller
{
   public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        // Create a new contact form instance
        $contactForm = new ContactForm();
        $contactForm->name = $validatedData['name'];
        $contactForm->email = $validatedData['email'];
        $contactForm->subject = $validatedData['subject'];
        $contactForm->message = $validatedData['message'];

        // Save the contact form to the database
        $contactForm->save();

        // Optionally, send notifications to the admin

        // Redirect back to the contact page with a success message
        return redirect()->route('contact')->with('success', 'Your message has been sent successfully!');
    }
}
