<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seeker extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static $validate = [
        'job_title'           => 'required',
        'career_field'        => 'required',
        'professional_level'  => 'required',
    ];

    //////  Relationships /////

    public function user()
    {
        return $this->belongsTo(User::class,'id');
    }
}
