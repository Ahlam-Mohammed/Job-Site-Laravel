<?php

namespace App\Http\Controllers\company;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($id)
    {
        $company = User::find($id)->company()->first();
        $jobs    = $company->user->jobs;

        return view('web.company.profile.index', compact('company','jobs'));
    }
}
