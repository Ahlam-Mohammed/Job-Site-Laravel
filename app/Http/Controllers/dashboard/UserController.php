<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id','DESC')->get();
        $roles = Role::pluck('name')->all();
        return view('dashboard.users.all-users', compact('users','roles'));
    }

    public function store(Request $request)
    {
        Validator::validate($request->all(), User::$validate,User::$message);

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);

        $user = User::create($input);
        $user->assignRole($request->input('roles'));

        return redirect()->route('dashboard.users.index')
            ->with('success', 'User has been added');
    }

    public function show(User $user)
    {
//        return view('show', compact('user'));
    }

    public function update(Request $request, $id)
    {
        Validator::validate($request->all(), User::$validate,User::$message);

        $input = $request->all();
        if(!empty($input['password'])){
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = Arr::except($input,array('password'));
        }

        $user = User::find($id);
        $user->update($input);

        DB::table('model_has_roles')->where('model_id',$id)->delete();

        $user->assignRole($request->input('roles'));

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
