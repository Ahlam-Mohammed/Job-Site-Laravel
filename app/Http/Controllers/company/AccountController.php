<?php

namespace App\Http\Controllers\company;

use App\Enum\UserEnum;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Traits\UploadTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    use UploadTrait;

    public function index()
    {
        return view('web.company.dashboard.account');
    }

    public function accountUpdate(Request $request)
    {
        $user = User::find(Auth::id());

        $request->validate( [
            'name'     => 'required',
            'email'    => 'required|email|unique:users,email,'.Auth::id(),
            'phone'    => 'numeric|nullable'
        ] );

        $user->name      = $request->input('name');
        $user->email     = $request->input('email');
        $user->full_name = $request->input('full_name');
        $user->phone     = $request->input('phone');
        $user->update();

        return redirect()->route('company.account')
            ->with('success','updated successfully');
    }

    public function updateAvatar(Request $request)
    {
        $avatar = $this->updateImage($request->avatar, UserEnum::USER_AVATAR_PATH,'uploads/users/'.Auth::user()->avatar);

        $user = User::find(Auth::id());
        $user->update(['avatar'=>$avatar]);

        return redirect()->route('company.account')
            ->with('success','updated Avatar successfully');
    }


}
