<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index($role = null)
    {
        $role === null ?
            $users = User::orderBy('id','DESC')->get() :
            $users =  User::role($role)->orderBy('id','DESC')->get();

        $roles = Role::pluck('name')->all();

        return view('dashboard.users.all-users', compact('users','roles'));
    }

    public function store(Request $request)
    {
        $this->validate($request, User::validate());

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);

        $user = User::create($input);
        $user->assignRole($request->input('roles'));

        return redirect()->route('dashboard.users.index')
            ->with('success', 'User has been added');
    }

    public function update(Request $request, $id)
    {
//        $this->validate($request, User::validate());

        $input = $request->all();
        if(!empty($input['password'])){
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = Arr::except($input,array('password'));
        }

        $user = User::find($id);
        $user->update($input);

//        DB::table('model_has_roles')->where('model_id',$id)->delete();
//
//        $user->assignRole($request->input('roles'));

        return redirect()->route('dashboard.users.index')
            ->with('success','User updated successfully');

    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('dashboard.users.index')
            ->with('success', 'User deleted successfully');
    }

}
