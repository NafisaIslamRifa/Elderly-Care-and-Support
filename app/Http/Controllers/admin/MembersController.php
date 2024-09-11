<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    public function index()
    {
        $members = Member::paginate(10);
        return view('admin.members', [
            'members' => $members
        ]);
    }

    public function AddMember(Request $request)
    {
      // Validate the request data
      $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'age' => 'required|integer|min:0',
        'gender' => 'required|in:male,female',
        'contact_number' => 'required|string|max:15',
        'room_number' => 'required|integer|between:1,50|unique:members,room_number', // Ensure room_number is unique in members table
        'disease' => 'required|in:Diabetes,Hypertension,Heart Disease',
        'staff_id' => 'required|exists:staffs,id',
        'admin_id' => 'nullable|exists:admins,id', // Ensure admin_id exists in admins table
    ], [
        'room_number.between' => 'The seat number must be between 1 and 50.',
        'room_number.unique' => 'The seat number has already been assigned to another member.', // Custom error message for unique room_number
    ]);
    
    // Create a new Member instance and fill it with the validated data
    $member = new Member([
        'name' => $validatedData['name'],
        'age' => $validatedData['age'],
        'gender' => $validatedData['gender'],
        'contact_number' => $validatedData['contact_number'],
        'room_number' => $validatedData['room_number'], // This will be validated to be unique
        'disease' => $validatedData['disease'],
        'staff_id' => $validatedData['staff_id'],
        'admin_id' => $validatedData['admin_id'] ?? 1, // Default to 1 if not provided
    ]);
    
    // Save the member to the database
    $member->save();
    
    // Redirect or return a response
    return redirect()->route('admin.Addmembers')->with('success', 'Member added successfully.');
    

    }

    public function editMember($id)
    {
        $member = Member::findOrFail($id);
        return view('admin.editMember', compact('member'));
    }

    public function updateMember(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:0',
            'gender' => 'required|in:male,female',
            'contact_number' => 'required|string|max:15',
            'room_number' => 'required|integer|between:1,50|unique:members,room_number', // Ensure room_number is unique in members table
            'disease' => 'required|in:Diabetes,Hypertension,Heart Disease',
            'staff_id' => 'required|exists:staffs,id',
            'admin_id' => 'nullable|exists:admins,id', // Ensure admin_id exists in admins table
        ], [
            'room_number.between' => 'The seat number must be between 1 and 50.',
            'room_number.unique' => 'The seat number has already been assigned to another member.', // Custom error message for unique room_number
        ]);

        $member = Member::findOrFail($id);
        
        $member->update([
            'name' => $validatedData['name'],
        'age' => $validatedData['age'],
        'gender' => $validatedData['gender'],
        'contact_number' => $validatedData['contact_number'],
        'room_number' => $validatedData['room_number'], // This will be validated to be unique
        'disease' => $validatedData['disease'],
        'staff_id' => $validatedData['staff_id'],
        'admin_id' => $validatedData['admin_id'] ?? 1, // Default to 1 if not provided
        ]);
        $member->save();

        return redirect()->route('admin.Addmembers')->with('success', 'Member updated successfully.');
    }

    public function deleteMember($id)
    {
        $member = Member::findOrFail($id);
        $member->delete();

        return redirect()->route('admin.Addmembers')->with('success', 'Member deleted successfully.');
    }
}
