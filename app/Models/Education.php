<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * The Education model represents the education information of a job seeker.
 */
class Education extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "degree",
        "school_name",
        "start_date",
        "graduation_date",
        "gpa"
    ];

    /**
     * Get the job seeker that owns the education.
     */
    public function jobSeeker()
    {
        return $this->belongsTo(JobSeeker::class);
    }
}
