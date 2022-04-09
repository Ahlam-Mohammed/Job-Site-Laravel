<?php

namespace App\Http\Controllers\company;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::where('user_id','=', Auth::id())->with('user')->get();

        return view('web.company.dashboard.job.index', compact('jobs'));
    }


    public function store(Request $request)
    {
        $this->validate($request, Job::validate());
        Job::create($request->all());

        return redirect()->route('company.job.index')
            ->with('success', 'Job has been added');
    }

    public function update(Request $request, $id)
    {
        $user = Job::find($id);
        $user->update($request->all());

        return redirect()->route('company.job.index')
            ->with('success', 'Job updated successfully');
    }

    public function destroy($id)
    {
        Job::find($id)->delete();
        return redirect()->route('company.job.index')
            ->with('success', 'Job deleted successfully');
    }

    public function active($id)
    {
        $job = Job::find($id);
        $job->is_active === 1 ? $job->update(['is_active' => 0]) : $job->update(['is_active' => 1]);

        return back()
            ->with('success', 'Active updated successfully');
    }
}
