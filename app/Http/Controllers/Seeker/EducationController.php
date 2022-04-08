<?php

namespace App\Http\Controllers\Seeker;

use App\Http\Controllers\Controller;
use App\Models\Education;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EducationController extends Controller
{
    public function index()
    {
        $education = User::find(Auth::id())->education()->get();
        return view('web.seeker.dashboard.education.educations', compact('education'));
    }

    public function store(Request $request)
    {
        $request->validate( Education::$validate );

        Education::create($request->all());

        return redirect()->route('seeker.educations.index')
            ->with('success', 'Education has been added');
    }

    public function update(Request $request, $id)
    {
        $request->validate( Education::$validate);

        $experience = Education::find($id);
        $experience->update($request->all());

        return redirect()->route('seeker.educations.index')
            ->with('success','Education updated successfully');

    }

    public function destroy(Education $education)
    {
        $education->delete();
        return redirect()->route('seeker.educations.index')
            ->with('success', 'Education deleted successfully');
    }
}
