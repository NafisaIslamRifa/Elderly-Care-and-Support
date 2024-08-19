<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\Food;
class AdminFoodController extends Controller
{
    public function index()
{
    return view('admin.food');
}

public function addFood(Request $request)
{
   
    $validatedData = $request->validate([
        'day' => 'required|in:Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday',
        'breakfast' => 'required|string|max:255',
        'lunch' => 'required|string|max:255',
        'dinner' => 'required|string|max:255',
        'cost' => 'required|numeric|min:0',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'admin_id' => 'nullable|exists:admins,id', 
    ]);

   
    if ($request->hasFile('image')) {
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $validatedData['image'] = $imageName;
    }

   
    $food = new Food([
        'day' => $validatedData['day'],
        'breakfast' => $validatedData['breakfast'],
        'lunch' => $validatedData['lunch'],
        'dinner' => $validatedData['dinner'],
        'cost' => $validatedData['cost'],
        'image' => $validatedData['image'] ?? null,
        'admin_id' => $validatedData['admin_id'] ?? 1, 
    ]);

   
    $food->save();

   
    return redirect()->route('admin.food')->with('success', 'Food item added successfully.');
}

public function get()
{
    
    $foods = Food::all();
    return view('admin.food', compact('foods'));
}

public function delete($id)
{
    
    $isDeleted = Food::where('id', $id)->delete();
    
    if ($isDeleted) {
        return redirect()->route('admin.food')->with('success', 'Food item deleted successfully.');
    } else {
        return redirect()->route('admin.food')->with('error', 'Failed to delete the food item.');
    }
}

public function edit($food_id)
{
    
    $food = Food::findOrFail($food_id);
    return view('admin.editFood', compact('food'));
}
public function update(Request $request, $food_id)
{
   
    $validatedData = $request->validate([
        'day' => 'required|in:Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday',
        'breakfast' => 'nullable|string|max:255',
        'lunch' => 'nullable|string|max:255',
        'dinner' => 'nullable|string|max:255',
        'cost' => 'required|numeric|min:0',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    
    $food = Food::where('id', $food_id)->firstOrFail(); 

   
    if ($request->hasFile('image')) {
       
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $food->image = $imageName;
    }

   
    $food->update([
        'day' => $validatedData['day'],
        'breakfast' => $validatedData['breakfast'],
        'lunch' => $validatedData['lunch'],
        'dinner' => $validatedData['dinner'],
        'cost' => $validatedData['cost'],
    ]);

    
    return redirect()->route('admin.food')->with('success', 'Food item updated successfully.');
}



}
