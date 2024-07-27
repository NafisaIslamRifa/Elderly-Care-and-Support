<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $table='members';

    protected $fillable = [
        'name',
        'age',
        'gender',
        'contact_number',
        'room_number',
        'room_status',
        'disease',
        'staff_id',
        'admin_id'
    ];

}
