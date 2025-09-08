<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('pages.contact');
    }

    public function submitForm(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:20',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        Contact::create($request->only('name', 'phone', 'email', 'message'));

        return redirect()->back()->with('success', 'Your message has been sent!');
    }
}
