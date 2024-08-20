<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserMessage;

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
    public function sendMessage(Request $request, $contact_id)
    {
        // Validate the request input
        $request->validate([
            'admin_message' => 'required|string|max:5000',
        ]);
    
        // Find the contact by the passed ID
        $contact = Contact::where('contact_id', $contact_id)->first();
    
        if ($contact) {
            // Get the user's email
            $to = $contact->email;
            
            // Get the admin's message from the request
            $adminMessage = $request->input('admin_message');
            $subject = "Reply from CareHome";
    
            // Send the email
            Mail::to($to)->send(new UserMessage($adminMessage, $subject));
    
            // Optionally, add a flash message to indicate success
            return redirect()->route('admin.message')->with('success', 'Reply sent to user successfully.');
        } else {
            // Handle the case where the contact isn't found
            return redirect()->route('admin.message')->with('error', 'User not found.');
        }
    }
    
}
