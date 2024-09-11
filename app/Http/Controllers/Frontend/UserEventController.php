<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class UserEventController extends Controller
{
    public function index(){
        return view("frontend.event");
    }

    public function get()
    {
        $events = Event::orderBy('event_id', 'DESC')->get();

        foreach ($events as $event) {
            $event->image_url = asset('frontend/images/' . $event->image);
        }
        
        return view('frontend.event', compact('events'));
        
    }
}
