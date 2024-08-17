<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class MessagesController extends Controller
{
   
    public function index()
    {
        return view('admin.messages');
    }

    public function get()
    {
        // Fetch all messages from the contacts table
        $contacts = Contact::all();

        // Pass the messages to the admin.message view
        return view('admin.messages', compact('contacts'));
    }

   

    public function delete($contact_id)
    {
       
        $isDeleted = Contact::where('contact_id', $contact_id)->delete();
        if ($isDeleted) {
            return redirect()->route('admin.message')->with('success', 'Message deleted successfully.');
        } else {
            return redirect()->route('admin.message')->with('error', 'Failed to delete the message.');
        }
    }


    public function edit($contact_id)
    {
        $contact = Contact::where('contact_id', $contact_id)->first();
        return view('admin.edit-message', compact('contact'));
    }

    public function update(Request $request, $contact_id)
    {
        $contact = Contact::where('contact_id', $contact_id)->first();
        $contact->update($request->all());

        return redirect()->route('admin.message')->with('success', 'Message updated successfully.');
    }
}
