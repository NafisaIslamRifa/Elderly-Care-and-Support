<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DonationController extends Controller
{
    public function index(){
       
        $donationsCount = DB::table('donations')->count();
        

        // Fetch the top 5 donations ordered by amount
   
    $topDonations = Donation::orderBy('amount','desc')
    
    ->get(['name',  'amount', 'status','transaction_id','id']); 
        return view('frontend.donation', compact('donationsCount','topDonations'));
        
    }
}
