<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        'small_heading',
        'main_heading_first',
        'main_heading_second',
        'description',
        'profile_image',
    ];
}
