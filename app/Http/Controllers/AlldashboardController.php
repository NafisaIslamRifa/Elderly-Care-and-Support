<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlldashboardController extends Controller
{
    public function index()
    {
        
       
        return view('Alldashboard');
    }
}
