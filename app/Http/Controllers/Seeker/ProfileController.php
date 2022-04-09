<?php

namespace App\Http\Controllers\Seeker;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index($id)
    {
        $user = User::find($id);

        $skills      = $user->skills()->get();
        $experiences = $user->experiences()->get();
        $educations  = $user->education()->get();
        $about       = $user->about()->first();
        $personal    = $user->personalInfo()->first();
        $social      = $user->social()->first();
        $info        = $user->info()->get();

        return view('web.seeker.profile.index',
            compact('skills', 'experiences', 'educations', 'about', 'personal', 'social', 'info','user'));
    }
}
