<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static $validate = [
        'type'           => 'required',
        'university'     => 'required',
        'academic_spec'  => 'required',
        'graduat_date'   => 'required',
        'user_id'        => 'required'
    ];

    //////  Relationships /////

    public function user()
    {
        return $this->belongsTo(User::class,'id');
    }
}
