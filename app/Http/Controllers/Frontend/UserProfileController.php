<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class UserProfileController extends Controller
{

    public function index()
    {
        // Retrieve the authenticated user
        $user = Auth::user();
        
        // Return the view with the user data
        return view('frontend.profile', compact('user'));
    }
   
}
