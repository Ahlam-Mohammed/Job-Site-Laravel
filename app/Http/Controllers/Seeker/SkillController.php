<?php

namespace App\Http\Controllers\Seeker;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SkillController extends Controller
{
    public function index()
    {
        $skills = User::find(Auth::id())->skills()->get();

        return view('web.seeker.dashboard.skill.skills', compact('skills'));
    }

    public function store(Request $request)
    {
        $request->validate( Skill::$validate );

        Skill::create($request->all());

        return redirect()->route('seeker.skills.index')
            ->with('success', 'Skill has been added');
    }

    public function update(Request $request, $id)
    {
        $request->validate( Skill::$validate );

        $skill = Skill::find($id);
        $skill->update($request->all());

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
