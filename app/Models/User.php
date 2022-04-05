<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
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

    public static $validate = [
        'name'     => 'required',
        'email'    => 'required|email|unique:users',
        'password' => 'required|same:confirm-password|min:6',
        'roles'    => 'required'
    ];

    public static $message = [
        'name.required'     => 'من فضلك أدخل اسم المستخدم',
        'email.required'    => 'من فضلك أدخل البريد الإلكتروني',
        'email.unique'      => 'البريد الإلكتروني موجود بالفعل',
        'email.email'       => 'من فضلك أدخل البريد الإلكتروني الصحيح',
        'password.required' => 'من فضلك أدخل كلمة السر',
        'password.same'     => 'كلمة السر غير مطابقة',
        'password.min'      => 'يجب أن تكون كلمة المرور أكثر من 6 أحرف',
        'roles.required'    => 'من فضلك حدد نوع المستخدم'
    ];
}
