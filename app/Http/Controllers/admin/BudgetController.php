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
        ->whereYear('date', '=', date('Y'))
        ->whereMonth('date', '=', date('m'))
        ->sum(DB::raw('electricity_cost + gas_cost + daily_cleaning_cost + security_cost'));



       // Calculate how many days have passed in the current month
// Get the current date and day of the month
$today = now();
$totalDays = $today->day; // For example, today is the 11th day of the month
$firstDayOfMonth = $today->startOfMonth();

// Array to map days of the week to the schema's enum day values


// Find out what day of the week it is today (e.g., Monday = 0, Sunday = 6)
$firstDayOfWeek = $firstDayOfMonth->dayOfWeek; // 0 = Sunday, 6 = Saturday
$daysOfWeek = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

// Initialize total food cost
$totalFoodCost = 0;

for ($i = 0; $i < $totalDays; $i++) {
    // Calculate the index of the day of the week based on the number of days that have passed
    $dayIndex = ($firstDayOfWeek + $i) % 7;
    $dayName = $daysOfWeek[$dayIndex];

    // Fetch the cost for this day from the 'foods' table
    $costForDay = DB::table('foods')
        ->where('day', $dayName)
        ->value('cost');

    // Add the cost of the day to the total
    $totalFoodCost += $costForDay;
}

// Now you have the total food cost for the month so far
$FoodCost = $totalFoodCost;

// You can return or display the food cost





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
        return view('admin.budget', compact('eventsCost','FoodCost','staffsSalary','donationsAmount','MaintenanceCost','donationsByMonth'));
        
    }
}
