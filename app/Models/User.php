<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'full_name',
        'avatar'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function validate($id = '')
    {
        return [
            'name'     => 'required',
            'email'    => 'required|email|unique:users,email,'.$id,
            'password' => 'required|same:confirm-password|min:6',
            'roles'    => 'required'
        ];
    }


    /**
     * Get User About
     */
    public function about(): HasOne
    {
        return $this->hasOne(About::class);
    }

    /**
     * Get User Information
     */
    public function info(): HasMany
    {
        return $this->hasMany(Seeker::class);
    }

    /**
     * Get User Educations
     */
    public function education(): HasMany
    {
        return $this->hasMany(Education::class);
    }

    /**
     * Get User Experiences
     */
    public function experiences(): HasMany
    {
        return $this->hasMany(Experience::class);
    }

    /**
     * Get User Languages
     */
    public function languages(): HasMany
    {
        return $this->hasMany(Language::class);
    }

    /**
     * Get User Skills
     */
    public function skills(): HasMany
    {
        return $this->hasMany(Skill::class);
    }

    /**
     * Get User Personal Info
     */
    public function personalInfo(): HasOne
    {
        return $this->hasOne(PersonalInfo::class);
    }

    /**
     * Get User Social Media
     */
    public function social(): HasOne
    {
        return $this->hasOne(SocialMedia::class);
    }

    /**
     * Get User Company
     */
    public function company(): HasOne
    {
        return $this->hasOne(Company::class);
    }

    /**
     * Get User jobs
     */
    public function jobs(): HasMany
    {
        return $this->hasMany(Job::class);
    }
}
