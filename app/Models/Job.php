<?php

namespace App\Models;

use Database\Factories\JobFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Job extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];


    //////  Relationships /////
    public function user()
    {
        return $this->belongsTo(User::class,'id');
    }

    public static function validate()
    {
        return [
            'job_title'    => 'required',
            'career_field' => 'required',
            'description'  => 'required',
            'type'         => 'required',
            'skills'       => 'required',
            'user_id'      => 'required',
            'min_salary'   => 'numeric',
            'max_salary'   => 'numeric',
        ];
    }

    protected static function newFactory()
    {
        return JobFactory::new();
    }
}
