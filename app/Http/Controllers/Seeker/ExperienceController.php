<?php

namespace App\Http\Controllers\Seeker;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index()
    {
        $experiences = Experience::orderBy('id','DESC')->get();
        return view('web.seeker.dashboard.experiences', compact('experiences'));
    }

    public function store(Request $request)
    {
        $request->validate( Experience::$validate );

        $input = $request->all();

        Experience::create($input);

        return redirect()->route('seeker.experiences.index')
            ->with('success', 'Experience has been added');
    }

    public function update(Request $request, $id)
    {
        $request->validate( Experience::$validate);

        $input = $request->all();

        $experience = Experience::find($id);
        $experience->update($input);

        return redirect()->route('seeker.experiences.index')
            ->with('success','Experience updated successfully');

    }

    public function destroy(Experience $experience)
    {
        $experience->delete();
        return redirect()->route('seeker.experiences.index')
            ->with('success', 'Experience deleted successfully');
    }
}
