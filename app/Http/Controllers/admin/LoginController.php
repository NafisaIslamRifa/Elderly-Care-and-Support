<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    // Show the admin login page
    public function index()
    {
        return view('admin.admin-login');
    }

    // Handle login form submission
    public function authenticate(Request $request)
    {
        // Validate the login request
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.login')->withInput()->withErrors($validator);
        }

        // Attempt to log the user in
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Check if the authenticated user is an admin
            if (Auth::user()->user_role == 'admin') {
                return redirect()->route('admin.dashboard');
                
            }

            // Authentication passed, redirect to the admin dashboard
            
            Auth::logout();
                return redirect()->route('admin.login')->with('error', 'Either Email or password is incorrect');
        } else {
            // Authentication failed, return back to login with error
            return redirect()->route('admin.login')->with('error', 'Either Email or password is incorrect');
        }
    }

    // Handle logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
