<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;

class MembersController extends Controller
{
   
    public function index()
    {
        return view('admin.members');
    }

   
    public function AddMember(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:0',
            'gender' => 'required|in:male,female',
            'contact_number' => 'required|string|max:15',
            'room_number' => 'required|string|max:255',
            'disease' => 'required|in:Diabetes,Hypertension,Heart Disease',
            'staff_id' => 'required|exists:staffs,id',
            'admin_id' => 'nullable|exists:admins,id', // Ensure admin_id exists in admins table
        ]);

        // Create a new Member instance and fill it with the validated data
        $member = new Member([
            'name' => $validatedData['name'],
            'age' => $validatedData['age'],
            'gender' => $validatedData['gender'],
            'contact_number' => $validatedData['contact_number'],
            'room_number' => $validatedData['room_number'],
            'disease' => $validatedData['disease'],
            'staff_id' => $validatedData['staff_id'],
            'admin_id' => $validatedData['admin_id'] ?? 1, // Default to 1 if not provided
        ]);

        // Save the member to the database
        $member->save();

        // Redirect or return a response
        return redirect()->route('admin.Addmembers')->with('success', 'Member added successfully.');
    }
    
}
