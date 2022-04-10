<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class ProfileController extends Controller
{
    public function index($id)
    {
        $user  = User::find($id);
        $roles = Role::pluck('name')->all();

        return view('dashboard.users.profile', compact('user','roles'));
    }
}
