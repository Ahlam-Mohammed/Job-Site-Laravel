@php use App\Enum\UserEnum @endphp
<section class="banner shadow" style="background-image: url({{ asset('images/circle/bg.svg') }}); background-size: cover; height: 50vh;background-position: center;">
    <div class="w-100" style="background-color: #ffffff00;; backdrop-filter: blur(6px);">
        <div class="container-lg">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-center align-items-center flex-column" style="height: 50vh;">
                        @if(Route::currentRouteName() === 'company.profile')
                            <div class="row">
                                <figure class="d-flex justify-content-center position-relative">
                                    <img src="@if ($company->logo) {{ asset(\App\Enum\CompanyEnum::COMPANY_LOGO_PATH.$company->logo) }} @else {{ asset(\App\Enum\CompanyEnum::COMPANY_LOGO_DEFAULT) }} @endif" width="15%" class="img-fluid rounded-circle border border-2 shadow border-light profile-img" alt="">
                                </figure>
                            </div>
                            <div class="row">
                                <h1 class="text-light fs-2">@if(isset($company->name)){{ $company->name }} @endif</h1>
                            </div>
                            <div class="row">
                                <p class="text-white">- @if (isset($company->industry)) {{ $company->industry }} @endif -</p>
                            </div>
                        @elseif(Route::currentRouteName() === 'seeker.profile')
                            <div class="row">
                                <figure class="d-flex justify-content-center position-relative">
                                    <img src="@if ($user->avatar) {{ asset(UserEnum::USER_AVATAR_PATH.$user->avatar) }} @else {{ asset(UserEnum::USER_AVATAR_DEFAULT) }} @endif" width="15%" class="img-fluid rounded-circle border border-2 shadow border-light profile-img" alt="">
                                </figure>
                            </div>
                            <div class="row">
                                <h1 class="text-light fs-2">{{ $user->name }}</h1>
                            </div>
                            <div class="row">
                                <p class="text-white">- @if (isset($user->about->job_title)) {{ $user->about->job_title }} @endif -</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
