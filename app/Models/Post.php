<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

   
    protected $fillable = [
        'title', 
        'description', 
        'type', 
        'is_paid', 
        'event_seats', 
        'event_available_seats', 
        'event_schedule',
        'event_images',
        'event_address',
        'event_city',
        'event_categories',
    ];

}
