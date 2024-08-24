<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserProfileController extends Controller
{

    public function index()
    {
        // Retrieve the authenticated user
        $user = Auth::user();

        $donations = DB::table('donations')
            ->join('users', 'users.id', '=', 'donations.user_id')
            ->where('donations.user_id', $user->id)
            ->select(
                'donations.name as donation_name', 
                'donations.email as donation_email', 
                'donations.amount', 
                'donations.transaction_id', 
                'donations.status',
                'users.email as user_email', 
                'users.name as user_name'
            )
            ->get();  // Use get() to fetch all records
        
        // Return the view with the donations data
        return view('frontend.profile', compact('donations'));
        
    }
   
}
