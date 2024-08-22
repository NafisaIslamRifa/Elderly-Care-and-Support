<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $table = 'reviews';

   
    protected $primaryKey = 'review_id';

   
    protected $fillable = [
        'reviewer_name',
        'review_text',
        'admin_id',
        'user_id'
    ];
}
