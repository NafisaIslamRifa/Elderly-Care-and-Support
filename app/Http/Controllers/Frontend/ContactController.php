<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function index(){
        return view("frontend.contact");
    }

    public function AddContact(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
            'admin_id' => 'nullable|exists:admins,id', // Ensure admin_id exists in admins table
        ]);

        // Create a new Contact instance and fill it with the validated data
        $contact = new Contact([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'message' => $validatedData['message'],
            'admin_id' => $validatedData['admin_id'] ?? 1, 
            'user_id' => Auth::user()->id, // Get the authenticated user's ID
        ]);

        // Save the contact to the database
        $contact->save();

        // Redirect or return a response
        return redirect()->route('account.contact')->with('success', 'Message sent successfully.');
        
    }
}
