<?php

namespace App\Http\Controllers\admin;
use App\Models\Event;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
   
    public function index()
    {
        return view('admin.event');
    }

    public function addEvent(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'date' => 'required|date',
            'location' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image file
            'cost' => 'required|numeric|min:0',
            'admin_id' => 'nullable|exists:admins,admin_id', // Ensure admin_id exists in admins table
        ]);

        // Handle the image upload
        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $validatedData['image'] = $imageName;
        }

        // Create a new Event instance and fill it with the validated data
        $event = new Event([
            'name' => $validatedData['name'],
            'date' => $validatedData['date'],
            'location' => $validatedData['location'],
            'description' => $validatedData['description'] ?? null,
            'image' => $validatedData['image'] ?? null,
            'cost' => $validatedData['cost'],
            'admin_id' => $validatedData['admin_id'] ?? 1, // Get the authenticated admin's ID
        ]);

        // Save the event to the database
        $event->save();

        // Redirect or return a response
        return redirect()->route('admin.event')->with('success', 'Event added successfully.');
    }

    public function get()
    {
        // Fetch all events from the database
        $events = Event::all();

        // Pass the events to the view
        return view('admin.event', compact('events'));
    }

    public function delete($event_id)
    {
        $isDeleted = Event::where('event_id', $event_id)->delete();
        if ($isDeleted) {
            return redirect()->route('admin.events')->with('success', 'Event deleted successfully.');
        } else {
            return redirect()->route('admin.events')->with('error', 'Failed to delete the event.');
        }
    }
    
    public function edit($event_id)
{
    $event = Event::where('event_id', $event_id)->first();
    return view('admin.editEvent', compact('event'));
}


public function update(Request $request, $event_id)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'date' => 'required|date',
        'location' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'cost' => 'required|numeric|min:0',
    ]);

    $event = Event::where('event_id', $event_id)->first();

    if ($request->hasFile('image')) {
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $event->image = $imageName;
    }

    $event->update([
        'name' => $validatedData['name'],
        'date' => $validatedData['date'],
        'location' => $validatedData['location'],
        'description' => $validatedData['description'],
        'cost' => $validatedData['cost'],
    ]);

    return redirect()->route('admin.event')->with('success', 'Event updated successfully.');
}

}
