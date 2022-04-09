<?php

namespace App\Http\Controllers\Seeker;

use App\Enum\UserEnum;
use App\Http\Controllers\Controller;
use App\Models\PersonalInfo;
use App\Models\User;
use App\Traits\UploadTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SettingController extends Controller
{
    use UploadTrait;

    public function account()
    {
        $personal = User::find(Auth::id())->personalInfo()->first();
        return view('web.seeker.dashboard.account', compact('personal'));
    }

    public function accountUpdate(Request $request)
    {
        $user = User::find(Auth::id());

        $request->validate( [
            'name'     => 'required',
            'email'    => 'required|email|unique:users,email,'.Auth::id(),
            'phone'    => 'nullable|numeric'
        ] );

        $user->name      = $request->input('name');
        $user->email     = $request->input('email');
        $user->full_name = $request->input('full_name');
        $user->phone     = $request->input('phone');
        $user->update();

        PersonalInfo::updateOrCreate( [ 'user_id' => Auth::id() ],
            [
                'birth'             => $request->input('birth'),
                'gender'            => $request->input('gender'),
                'nationality'       => $request->input('nationality'),
                'residence_country' => $request->input('residence_country')
            ]);

        return redirect()->route('seeker.account')
            ->with('success','updated successfully');
    }

    public function updateAvatar(Request $request)
    {
        $avatar = $this->updateImage($request->avatar, UserEnum::USER_AVATAR_PATH,'uploads/users/'.Auth::user()->avatar);

        $user = User::find(Auth::id());
        $user->update(['avatar'=>$avatar]);

        return redirect()->route('seeker.account')
            ->with('success','updated Avatar successfully');
    }
}
