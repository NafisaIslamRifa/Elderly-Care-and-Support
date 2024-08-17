<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $table = 'events';
    protected $primaryKey = 'event_id';

    protected $fillable = [
        'name',
        'date',
        'location',
        'description',
        'image',
        'cost',
        'admin_id',
    ];
}
