<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Review;

class dashboardController extends Controller
{
    public function index()
    {


        
        
       
        return view('dashboard');
    }

    public function fetch()
    {
        
       
        // $reviews = Review::all();
        
        $reviews = Review::orderBy('created_at', 'desc')->take(2)->get();
        return view('dashboard', compact('reviews'));
    }
}
