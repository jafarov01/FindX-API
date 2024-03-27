<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Represents an experience model associated with a job seeker.
 */
class Experience extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "start_date",
        "end_date",
        "position",
        "company_name",
        "location",
        "time_type", // full-time, part-time, contract, internship
        "location_type", // remote, on-site
        "description",
        "skills_used",
        "job_seeker_id"
    ];

    /**
     * Get the job seeker that owns the experience.
     */
    public function jobSeeker()
    {
        return $this->belongsTo(JobSeeker::class);
    }
}
