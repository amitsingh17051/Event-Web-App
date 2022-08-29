<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hoster extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 
        'email', 
        'mobile', 
        'profile_image', 
        'social_links', 
        'address', 
        'about',
        'event_images',
        'events_ids',
    ];

}
