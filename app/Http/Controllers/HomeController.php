<?php

namespace App\Http\Controllers;

use App\Enum\JobEnum;
use App\Models\Company;
use App\Models\Job;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $companies = Company::all();
        $jobs      = Job::where('status',JobEnum::STATUS_APPROVED)
                            ->where('is_active', 1)->get();

        return view('web.index',compact('companies', 'jobs'));
    }

    public function getAllJobs(): Factory|View|Application
    {
        $jobs = Job::where('status',JobEnum::STATUS_APPROVED)->paginate(10);
        return view('web.job.all-jobs', compact('jobs'));
    }

    public function details($id): Factory|View|Application
    {
        $job = Job::find($id);

        $similar = Job::where('career_field', 'like', '%' . $job->career_field	 . '%')->get();

        return view('web.job.details-job', compact('job', 'similar'));
    }

    public function companyProfile($id)
    {
        $company = User::find($id)->company()->first();
        $jobs    = $company->user->jobs;

        return view('web.company.profile.index', compact('company','jobs'));
    }

    public function seekerProfile($id)
    {
        $user = User::find($id);

        $skills      = $user->skills()->get();
        $experiences = $user->experiences()->get();
        $educations  = $user->education()->get();
        $about       = $user->about()->first();
        $personal    = $user->personalInfo()->first();
        $social      = $user->social()->first();
        $info        = $user->info()->get();

        return view('web.seeker.profile.index',
            compact('skills', 'experiences', 'educations', 'about', 'personal', 'social', 'info','user'));
    }

    public function getAllCompanies()
    {
        $companies = Company::all();
        return view('web.companies',compact('companies'));
    }

    public function contact()
    {
        return view('web.contact');
    }

    public function service()
    {
        return view('web.services');
    }

    public function about()
    {
        return view('web.about');
    }


}
