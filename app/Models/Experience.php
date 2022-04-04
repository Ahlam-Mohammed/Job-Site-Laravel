<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static $validate = [
        'job_title'    => 'required',
        'career_field' => 'required',
        'company_name' => 'required',
        'start_date'   => 'required',
    ];

    //////  Relationships /////

    public function user()
    {
        return $this->belongsTo(User::class,'id');
    }
}
