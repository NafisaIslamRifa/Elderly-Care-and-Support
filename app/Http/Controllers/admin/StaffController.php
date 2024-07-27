<?php

namespace App\Http\Controllers\admin;
use App\Models\staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    
    public function index()
    {
        return view('admin.staff');
    }

    public function AddStaff(Request $request)
{
    // Validate the request data
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'age' => 'required|integer|min:0',
        'gender' => 'required|in:male,female',
        'contact_number' => 'required|string|max:15',
        'salary' => 'required|numeric|min:0',
        'admin_id' => 'nullable|exists:admins,admin_id', // Ensure admin_id exists in admins table
    ]);

    // Create a new Staff instance and fill it with the validated data
    $staff = new Staff([
        'name' => $validatedData['name'],
        'age' => $validatedData['age'],
        'contact_number' => $validatedData['contact_number'],
        'salary' => $validatedData['salary'],
        'gender' => $validatedData['gender'],
        'admin_id' => $validatedData['admin_id'] ?? 1, // Default to 1 if not provided
    ]);

    // Save the staff member to the database
    $staff->save();

    // Redirect or return a response
    return redirect()->route('admin.AddStaff')->with('success', 'Staff added successfully.');
}

        
    

}
