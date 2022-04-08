<?php

namespace App\Http\Controllers\Seeker;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AboutController extends Controller
{
    public function index()
    {
        $user = User::find(Auth::id())->about()->first();
        return view('web.seeker.dashboard.about', compact('user'));
    }

    public function store(Request $request)
    {
        $request->validate(About::$validate);

        About::updateOrCreate(['user_id' => Auth::id()], [
            'job_title' => $request->input('job_title'),
            'about'     => $request->input('about')
        ]);

        return redirect()->route('seeker.about.index')
            ->with('success','About updated successfully');

    }
}
