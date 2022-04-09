<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static $validate = [
        'language' => 'required',
        'level'    => 'required',
        'user_id'  => 'required'
    ];

    //////  Relationships /////

    public function user()
    {
        return $this->belongsTo(User::class,'id');
    }
}
