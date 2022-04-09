<?php

namespace App\Http\Controllers\company;

use App\Enum\CompanyEnum;
use App\Enum\UserEnum;
use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\User;
use App\Traits\UploadTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AboutController extends Controller
{
    use UploadTrait;

    public function index()
    {
        $company = User::find(Auth::id())->company()->first();
        return view('web.company.dashboard.about', compact('company'));
    }

    public function store(Request $request)
    {
        $request->validate(Company::$validate);

        Company::updateOrCreate(['user_id' => Auth::id()], [
            'name'     => $request->input('name'),
            'phone'    => $request->input('phone'),
            'email'    => $request->input('email'),
            'country'  => $request->input('country'),
            'industry' => $request->input('industry')
        ]);

        return redirect()->route('company.about.index')
            ->with('success','About updated successfully');

    }

    public function updateLogo(Request $request)
    {
        $company = User::find(Auth::id())->company()->first();
        $logo = isset($company->logo) === false ? '' : $company->logo;
        $avatar = $this->updateImage($request->avatar,
                            CompanyEnum::COMPANY_LOGO_PATH,
                             CompanyEnum::COMPANY_LOGO_PATH.$logo);

        Company::updateOrCreate(['user_id' => Auth::id()], [
            'logo'  => $avatar
        ]);

        return redirect()->route('company.about.index')
            ->with('success','logo successfully');
    }
}
