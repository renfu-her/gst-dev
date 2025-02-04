<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SocialLink extends Model
{
    protected $fillable = [
        'facebook_url',
        'line_url',
        'instagram_url',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
