<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index($status = null)
    {
        $status === null ? $jobs = Job::all() : $jobs = Job::where('status',$status)->get();

        return view('dashboard.job.all-jobs', compact('jobs'));
    }

    public function store(Request $request)
    {
        $this->validate($request, Job::validate());
        Job::create($request->all());

        return redirect()->route('dashboard.jobs.index')
            ->with('success', 'Job has been added');
    }


    public function update(Request $request, $id)
    {
//        $this->validate($request, Job::validate());
        $user = Job::find($id);
        $user->update($request->all());

        return redirect()->route('dashboard.jobs.index')
            ->with('success', 'Job updated successfully');
    }

    public function destroy(Job $job)
    {
        $job->delete();
        return redirect()->route('dashboard.jobs.index')
            ->with('success', 'Job deleted successfully');
    }

    public function  status($id, $status)
    {
        Job::where('id', $id)->update(['status' => $status]);

        return back()
            ->with('success', 'Status updated successfully');
    }

    public function  active($id)
    {
        $job = Job::find($id);
        $job->is_active === 1 ? $job->update(['is_active' => 0]) : $job->update(['is_active' => 1]);

        return back()
            ->with('success', 'Active updated successfully');
    }
}
