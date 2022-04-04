<?php

namespace App\Http\Controllers\Seeker;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index()
    {
        $skills = Skill::orderBy('id','DESC')->get();
        return view('web.seeker.dashboard.skills', compact('skills'));
    }

    public function store(Request $request)
    {
        $request->validate( Skill::$validate );

        $input = $request->all();

        Skill::create($input);

        return redirect()->route('seeker.skills.index')
            ->with('success', 'Skill has been added');
    }

    public function update(Request $request, $id)
    {
        $request->validate( Skill::$validate );

        $input = $request->all();

        $skill = Skill::find($id);
        $skill->update($input);

        return redirect()->route('seeker.skills.index')
            ->with('success','Skill updated successfully');

    }

    public function destroy(Skill $skill)
    {
        $skill->delete();
        return redirect()->route('seeker.skills.index')
            ->with('success', 'Skill deleted successfully');
    }
}
