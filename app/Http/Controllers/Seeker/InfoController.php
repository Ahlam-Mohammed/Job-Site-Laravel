<?php

namespace App\Http\Controllers\Seeker;

use App\Http\Controllers\Controller;
use App\Models\Seeker;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InfoController extends Controller
{
    public function index()
    {
        $seeker = User::find(Auth::id())->info()->get();
        return view('web.seeker.dashboard.information.info', compact('seeker'));
    }

    public function store(Request $request)
    {
        $request->validate( Seeker::$validate );

        Seeker::create($request->all());

        return redirect()->route('seeker.info.index')
            ->with('success', 'Information has been added');
    }

    public function update(Request $request, $id)
    {
        $request->validate( Seeker::$validate );

        Seeker::find($id)->update($request->all());

        return redirect()->route('seeker.info.index')
            ->with('success','Information updated successfully');

    }

    public function destroy($id)
    {
        Seeker::find($id)->delete();

        return redirect()->route('seeker.info.index')
            ->with('success', 'Information deleted successfully');
    }
}
