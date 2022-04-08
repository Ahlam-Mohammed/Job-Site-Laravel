@php use App\Enum\UserEnum @endphp
<div class="col-lg-3 col-12 pb-4" style="background-image: url({{ asset('images/circle/bg-login.svg') }});background-size: cover;background-position: center;">
    <div class="row">
        <!-- Nav -->
        <div class="col-12">
            <div class="d-flex align-items-center mt-lg-3">
                <div class=" d-flex logo shadow align-items-center justify-content-center">
                    <a href="{{ route('home') }}"><i class="bi bi-house-door-fill text-light"></i></a>
                </div>
            </div>
        </div>
        <!-- image profile -->
        <div class="col-lg-12 col-md-6 col-sm-6 col-10 m-auto d-flex justify-content-center align-items-center p-4 pt-0 position-relative">
            <img src="@if (Auth::user()->avatar) {{ asset(UserEnum::USER_AVATAR_PATH.Auth::user()->avatar) }} @else {{ asset(UserEnum::USER_AVATAR_DEFAULT) }} @endif" width="35%" class="img-fluid rounded-circle border border-2 shadow border-light" alt="">
        </div>
        <div class="row text-center">
            <h1 class="text-light fs-4">{{ Auth::user()->name }}</h1>
        </div>
        <div class="row text-center">
            <p class="text-white">- @if (isset(Auth::user()->about()->first()->job_title)) {{ Auth::user()->about()->first()->job_title }} @endif -</p>
        </div>
        <div class="row text-center">
            <button class="btn w-25 m-auto btn-sm btn-primary d-inline"><a href="{{ route('seeker.profile') }}" class="text-light">Profile</a></button>
        </div>
        <nav class="card bg-transparent px-3 py-4 mt-3 d-flex gap-3">
            <div class="@if(Route::currentRouteName() === 'seeker.account') bg-light rounded @endif">
                <a href="{{ route('seeker.account') }}" class=" @if(Route::currentRouteName() === 'seeker.account') text-primary @else text-light @endif d-flex align-items-center d-inline-block ms-3 border-bottom p-2">
                    <i class="bi bi-person pe-2"></i>
                    <span class="fs-6 fw-normal">Account</span>
                </a>
            </div>
            <div class="@if(Route::currentRouteName() === 'seeker.about.index') bg-light rounded @endif">
                <a href="{{ route('seeker.about.index') }}" class=" @if(Route::currentRouteName() === 'seeker.about.index') text-primary @else text-light @endif d-flex align-items-center d-inline-block ms-3 border-bottom p-2">
                    <i class="bi bi-file-person pe-2"></i>
                    <span class="fs-6 fw-normal">About</span>
                </a>
            </div>
            <div class="@if(Route::currentRouteName() === 'seeker.info.index') bg-light rounded @endif">
                <a href="{{ route('seeker.info.index') }}" class=" @if(Route::currentRouteName() === 'seeker.info.index') text-primary @else text-light @endif d-flex align-items-center d-inline-block ms-3 border-bottom p-2">
                    <i class="bi bi-card-heading pe-2"></i>
                    <span class="fs-6 fw-normal">Information</span>
                </a>
            </div>
            <div class="@if(Route::currentRouteName() === 'seeker.skills.index') bg-light rounded @endif">
                <a href="{{ route('seeker.skills.index') }}" class=" @if(Route::currentRouteName() === 'seeker.skills.index') text-primary @else text-light @endif d-flex align-items-center d-inline-block ms-3 border-bottom p-2">
                    <i class="bi bi-collection pe-2"></i>
                    <span class="fs-6 fw-normal">Skills</span>
                </a>
            </div>
            <div class="@if(Route::currentRouteName() === 'seeker.experiences.index') bg-light rounded @endif">
                <a href="{{ route('seeker.experiences.index') }}" class=" @if(Route::currentRouteName() === 'seeker.experiences.index') text-primary @else text-light @endif d-flex align-items-center d-inline-block ms-3 border-bottom p-2">
                    <i class="bi bi-bar-chart pe-2"></i>
                    <span class="fs-6 fw-normal">Experience</span>
                </a>
            </div>
            <div class="@if(Route::currentRouteName() === 'seeker.educations.index') bg-light rounded @endif">
                <a href="{{ route('seeker.educations.index') }}" class=" @if(Route::currentRouteName() === 'seeker.educations.index') text-primary @else text-light @endif d-flex align-items-center d-inline-block ms-3 border-bottom p-2">
                    <i class="bi  bi-mortarboard pe-2"></i>
                    <span class="fs-6 fw-normal">Education</span>
                </a>
            </div>
            <div class="@if(Route::currentRouteName() === 'seeker.social.index') bg-light rounded @endif">
                <a href="{{ route('seeker.social.index') }}" class=" @if(Route::currentRouteName() === 'seeker.social.index') text-primary @else text-light @endif d-flex align-items-center d-inline-block ms-3 border-bottom p-2">
                    <i class="bi bi-translate pe-2"></i>
                    <span class="fs-6 fw-normal">Social Media</span>
                </a>
            </div>
            <div class="@if(Route::currentRouteName() === 'seeker.languages.index') bg-light rounded @endif">
                <a href="{{ route('seeker.languages.index') }}" class=" @if(Route::currentRouteName() === 'seeker.languages.index') text-primary @else text-light @endif d-flex align-items-center d-inline-block ms-3 border-bottom p-2">
                    <i class="bi bi-translate pe-2"></i>
                    <span class="fs-6 fw-normal">Languages</span>
                </a>
            </div>
            <!-- log out -->
            <div>
                <a href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="text-light d-flex align-items-center d-inline-block ms-3 border-bottom p-2">
                    <i class="bi bi-box-arrow-right pe-2"></i>
                    <span class="fs-6 fw-normal">Logout</span>
                </a>
            </div>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </nav>
    </div>
</div>
