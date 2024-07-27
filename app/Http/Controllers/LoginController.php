<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    // Show the customer login page
    public function index()
    {
        return view('login');
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
            return redirect()->route('account.login')->withInput()->withErrors($validator);
        }

        // Attempt to log the user in
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

            // Authentication passed, redirect to intended page

            $user = Auth::user();
            $request->session()->put('auth', $user);
            $request->session()->put('user', $user->name);
           
            return redirect()->route('account.dashboard');
        } else {
            // Authentication failed, return back to login with error
            return redirect()->route('account.login')->with('error', 'Either Email or password is incorrect');
        }
    }

    public function register()
    {
        return view('register');
    }

    public function processregister(Request $request)
    {
        // Validate the registration request
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'number' => 'required|string|max:15',
            'address' => 'required|string|max:255',
            'password' => 'required|confirmed|min:8'
        ]);

        if ($validator->fails()) {
            return redirect()->route('account.register')->withInput()->withErrors($validator);
        }

        // Create the user
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->phone_no = $request->number;
       
        $user->password = Hash::make($request->password);
        $user->user_role = 'customer';
        $user->admin_id = 1; // Assuming a fixed admin_id value
       
        $user->save();

        return redirect()->route('account.login')->with('success', 'You have registered successfully');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('account.login');
    }
}