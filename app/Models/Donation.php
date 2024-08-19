<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;


    protected $table='donations';

    protected $fillable = [
        'id',
        'user_id',
        'admin_id',
        'name',
        'email',
        'phone',
        'amount',
        'address',
        'status',
        'transaction_id',
        'currency',
    ];

}
