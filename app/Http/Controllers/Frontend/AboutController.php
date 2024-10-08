<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Donation;

class AboutController extends Controller
{
    public function index()
    {
        // Count the number of records in various tables
        $messagesCount = DB::table('contacts')->count();
        $eventsCount = DB::table('events')->count();
        $membersCount = DB::table('members')->count();
        $staffsCount = DB::table('staffs')->count();
        $donationsCount = DB::table('donations')->count();

        // Fetch the top 5 donations ordered by amount
        $topDonations = Donation::orderBy('amount', 'desc')
            ->take(5) // Limit to 5 results
            ->get(['name', 'amount', 'status']);

        // Pass the data to the view
        return view('frontend.about', compact('messagesCount', 'eventsCount', 'membersCount', 'staffsCount', 'donationsCount', 'topDonations'));
    }
}
