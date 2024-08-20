<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Donation;

class BudgetController extends Controller
{
    public function index()
    {
        $messagesCount = DB::table('contacts')->count();
        $eventsCost = DB::table('events') ->whereYear('date', '=', date('Y'))
        ->whereMonth('date', '=', date('m'))
        
        
        ->sum('cost');
        $membersCount = DB::table('members')->count();
        $staffsSalary = DB::table('staffs')
    ->whereYear('created_at', '=', date('Y'))
    ->whereMonth('created_at', '=', date('m'))
    ->sum('salary');

        $donationsAmount = DB::table('donations')
        ->whereYear('updated_at', '=', date('Y'))
        ->whereMonth('updated_at', '=', date('m'))
        
        
        ->sum('amount');

        $MaintenanceCost = DB::table('maintenances')
        ->whereYear('created_at', '=', date('Y'))
        ->whereMonth('created_at', '=', date('m'))
        ->sum(DB::raw('electricity_cost + gas_cost + daily_cleaning_cost + security_cost'));



        $FoodCost = DB::table('foods')
        ->whereYear('created_at', '=', date('Y'))
        ->whereMonth('created_at', '=', date('m'))
        
        
        ->sum('cost');


        $donationsByMonth = DB::table('donations')
        ->select(DB::raw('SUM(amount) as total_amount'), DB::raw('MONTHNAME(updated_at) as month'))
        ->whereYear('updated_at', '=', date('Y'))
        ->groupBy(DB::raw('MONTHNAME(updated_at)'), DB::raw('MONTH(updated_at)'))
        ->orderBy(DB::raw('MONTH(updated_at)'))
        ->pluck('total_amount', 'month')
        ->toArray();
    

    
        

        // Fetch the top 5 donations ordered by amount
   
    $topDonations = Donation::orderBy('id','desc')
    
    ->get(['name',  'amount', 'status','transaction_id','id']); 
        return view('admin.budget', compact('messagesCount', 'eventsCost','FoodCost','staffsSalary','donationsAmount','MaintenanceCost','donationsByMonth'));
        
    }
}
