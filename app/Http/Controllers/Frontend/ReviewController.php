<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;
class ReviewController extends Controller
{
    public function index(){
        return view("admin.review");
    }

    public function addReview(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'reviewer_name' => 'required|string|max:255',
            'review_text' => 'required|string',
            'admin_id' => 'nullable|exists:admins,admin_id', // Ensure admin_id exists in admins table
            
        ]);

        // Create a new Review instance and fill it with the validated data
        $review = new Review([
            'reviewer_name' => $validatedData['reviewer_name'],
            'review_text' => $validatedData['review_text'],
            'admin_id' => $validatedData['admin_id'] ?? 1, // Set to null if not provided
           
            'user_id' => Auth::user()->id, // Get the authenticated user's ID
        ]);

        // Save the review to the database
        $review->save();

        // Redirect or return a response
        return redirect()->route('account.dashboard')->with('success', 'Review submitted successfully.');
        
    }

    public function get()
    {
        
        $reviews = Review::all();

       
        return view('admin.review', compact('reviews'));
    }

    public function delete($review_id)
    {
        // Attempt to delete the review with the given ID
        $isDeleted = Review::where('review_id', $review_id)->delete();

        if ($isDeleted) {
            return redirect()->route('admin.reviews')->with('success', 'Review deleted successfully.');
        } else {
            return redirect()->route('admin.reviews')->with('error', 'Failed to delete the review.');
        }
    }

    
    

}
