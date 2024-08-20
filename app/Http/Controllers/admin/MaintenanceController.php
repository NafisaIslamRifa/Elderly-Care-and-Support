<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Maintenance;
class MaintenanceController extends Controller
{
    public function index()
    {
        return view('admin.maintenance');
    }

    public function addMaintenance(Request $request)
{
   
    $validatedData = $request->validate([
        
        'date' => 'required|date',
        'electricity_cost' => 'required|numeric|min:0',
        'gas_cost' => 'required|numeric|min:0',
        'daily_cleaning_cost' => 'required|numeric|min:0',
        'security_cost' => 'required|numeric|min:0',
        'admin_id' => 'nullable|exists:admins,id', 
    ]);


   
    $maintenance = new Maintenance([
       
        'date' => $validatedData['date'],
        'electricity_cost' => $validatedData['electricity_cost'],
        'gas_cost' => $validatedData['gas_cost'],
        'daily_cleaning_cost' => $validatedData['daily_cleaning_cost'],
        'security_cost' => $validatedData['security_cost'],
        'admin_id' => $validatedData['admin_id'] ?? 1, 
    ]);

   
    $maintenance->save();

    
    return redirect()->route('admin.maintenance')->with('success', 'Maintenance cost added successfully.');
}

public function get()
{
    
    $maintenances = Maintenance::all();
    
    
    return view('admin.maintenance', compact('maintenances'));
}

public function delete($id)
{
   
    $isDeleted = Maintenance::where('id', $id)->delete();
    
    if ($isDeleted) {
        
        return redirect()->route('admin.maintenance')->with('success', 'Maintenance record deleted successfully.');
    } else {
        
        return redirect()->route('admin.maintenance')->with('error', 'Failed to delete the maintenance record.');
    }
}

public function edit($maintenance_id)
{
    $maintenance = Maintenance::findOrFail($maintenance_id);
    return view('admin.editMaintenance', compact('maintenance'));
}
public function update(Request $request, $maintenance_id)
{
    $validatedData = $request->validate([
        
        'date' => 'required|date',
        'electricity_cost' => 'required|numeric|min:0',
        'gas_cost' => 'required|numeric|min:0',
        'daily_cleaning_cost' => 'required|numeric|min:0',
        'security_cost' => 'required|numeric|min:0',
    ]);

    $maintenance = Maintenance::findOrFail($maintenance_id);

    $maintenance->update([
        
        'date' => $validatedData['date'],
        'electricity_cost' => $validatedData['electricity_cost'],
        'gas_cost' => $validatedData['gas_cost'],
        'daily_cleaning_cost' => $validatedData['daily_cleaning_cost'],
        'security_cost' => $validatedData['security_cost'],
    ]);

    return redirect()->route('admin.maintenance')->with('success', 'Maintenance record updated successfully.');
}
}
