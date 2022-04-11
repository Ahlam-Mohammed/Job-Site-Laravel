<?php

namespace App\Http\Controllers\dashboard;

use App\Enum\UserEnum;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Traits\UploadTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class ProfileController extends Controller
{
    use UploadTrait;

    public function index($id)
    {
        $user  = User::find($id);
        $roles = Role::pluck('name')->all();

        return view('dashboard.users.profile', compact('user','roles'));
    }

    public function setting()
    {
        $user  = User::find(Auth::id());
        $roles = Role::pluck('name')->all();

        return view('dashboard.users.setting', compact('user','roles'));
    }

    public function updateAvatar(Request $request)
    {
        $avatar = $this->updateImage($request->avatar, UserEnum::USER_AVATAR_PATH,'uploads/users/'.Auth::user()->avatar);

        $user = User::find(Auth::id());
        $user->update(['avatar'=>$avatar]);

        return back()
            ->with('success','updated Avatar successfully');
    }
}
