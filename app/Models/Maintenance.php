<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    use HasFactory;
    protected $table = 'maintenances';
    protected $primaryKey = 'id';

    protected $fillable = [
        'month',
        'electricity_cost',
        'gas_cost',
        'daily_cleaning_cost',
        'security_cost',
        'admin_id',
    ];
}
