<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobSeeker extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "first_name",
        "last_name",
        "resume",
        "profile_photo",
        "skills",
        "experience",
        "education",
        "contact_number",
        "personal_websites",
    ];

    /**
     * Get the user associated with the job seeker.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function user()
    {
        return $this->morphOne(User::class, 'userable');
    }

    /**
     * Get the experiences associated with the job seeker.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function experiences()
    {
        return $this->hasMany(Experience::class);
    }

    /**
     * Get the educations associated with the job seeker.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function educations()
    {
        return $this->hasMany(Education::class);
    }
    
    /**
     * Get the personal websites associated with the job seeker.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function personalWebsites()
    {
        return $this->hasMany(PersonalWebsite::class);
    }

    /**
     * Get the skills associated with the job seeker.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function skills()
    {
        return $this->hasMany(Skill::class);
    }
}
