<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Mail\DonationEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Donation;
use Illuminate\Support\Facades\Mail;

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
   
    $topDonations = Donation::orderBy('id','desc')
    
    ->get(['name',  'amount', 'status','transaction_id','id']); 
        return view('admin.admin-dashboard', compact('messagesCount', 'eventsCount','membersCount','staffsCount','donationsCount','topDonations'));
    }

    public function accept($id)
    {
        // Find the donation by the passed ID
        $donation = Donation::find($id);
    
        if ($donation) {
            // Update the status to "Successful"
            $donation->status = "Successful";
            $donation->save(); // Save the changes to the database
    
            // Define the email variables
            $to = $donation->email;
            $msg = "Your donation has been marked as successful. Thank you for your contribution!";
            $subject = "Donation Successful";
    
            // Send the email
            Mail::to($to)->send(new DonationEmail($msg, $subject));
    
            // Optionally, add a flash message to indicate success
            return redirect()->back()->with('success', 'Donation status updated successfully.');
        } else {
            // Handle the case where the donation isn't found
            return redirect()->back()->with('error', 'Donation not found.');
        }
    }
    
    
    }

