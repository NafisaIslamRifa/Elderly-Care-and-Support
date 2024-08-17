<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Donation;
class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('admin.admin-dashboard');
    }
    public function count()
    {
        $messagesCount = DB::table('contacts')->count();
        $eventsCount = DB::table('events')->count();
        $membersCount = DB::table('members')->count();
        $staffsCount = DB::table('staffs')->count();
        $donationsCount = DB::table('donations')->count();

        // Fetch the top 5 donations ordered by amount
   
    $topDonations = Donation::orderBy('amount', 'desc')
    ->take(5)
    ->get(['name',  'amount', 'status']); 
        return view('admin.admin-dashboard', compact('messagesCount', 'eventsCount','membersCount','staffsCount','donationsCount','topDonations'));
    }
}
