<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Represents a skill that a job seeker possesses.
 */
class Skill extends Model
{
    use HasFactory;

    /**
     * The Skill model represents a skill in the application.
     *
     * @var array
     */
    protected $fillable = [
        "name",
        "experience_level",
    ];

    /**
     * Get the job seeker associated with the skill.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function jobSeeker()
    {
        return $this->belongsTo(JobSeeker::class);
    }
}
