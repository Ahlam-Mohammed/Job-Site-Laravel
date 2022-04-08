<?php

namespace App\Http\Controllers\Seeker;

use App\Http\Controllers\Controller;
use App\Models\SocialMedia;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SocialController extends Controller
{
    public function index()
    {
        $social = User::find(Auth::id())->social()->first();
        return view('web.seeker.dashboard.social', compact('social'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'facebook_link'  => 'url|nullable',
            'twitter_link'   => 'url|nullable',
            'linkedin_link'  => 'url|nullable',
            'whatsapp_link'  => 'url|nullable',
            'github_link'    => 'url|nullable'
        ]);

        SocialMedia::updateOrCreate( [ 'user_id' => Auth::id() ],
            [
                'facebook_link'  => $request->input('facebook_link'),
                'twitter_link'   => $request->input('twitter_link'),
                'linkedin_link'  => $request->input('linkedin_link'),
                'whatsapp_link'  => $request->input('whatsapp_link'),
                'github_link'    => $request->input('github_link')
            ]);

        return redirect()->route('seeker.social.index')
            ->with('success','updated successfully');
    }
}

