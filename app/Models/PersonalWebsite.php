<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalWebsite extends Model
{
    use HasFactory;

    protected $fillable = [
        "url",
        "website_name" // LinkedIn, GitHub, personal website
    ];

    public function jobSeeker()
    {
        return $this->belongsTo(JobSeeker::class);
    }
}
