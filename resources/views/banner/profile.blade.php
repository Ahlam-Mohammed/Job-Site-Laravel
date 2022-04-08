@php use App\Enum\UserEnum @endphp
<section class="banner shadow" style="background-image: url({{ asset('images/circle/bg.svg') }}); background-size: cover; height: 50vh;background-position: center;">
    <div class="w-100" style="background-color: #ffffff00;; backdrop-filter: blur(6px);">
        <div class="container-lg">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-center align-items-center flex-column" style="height: 50vh;">
                        <div class="row">
                            <figure class="d-flex justify-content-center position-relative">
                                <img src="@if (Auth::user()->avatar) {{ asset(UserEnum::USER_AVATAR_PATH.Auth::user()->avatar) }} @else {{ asset(UserEnum::USER_AVATAR_DEFAULT) }} @endif" width="15%" class="img-fluid rounded-circle border border-2 shadow border-light profile-img" alt="">
                            </figure>
                        </div>
                        <div class="row">
                            <h1 class="text-light fs-2">{{ Auth::user()->name }}</h1>
                        </div>
                        <div class="row">
                            <p class="text-white">- @if (isset(Auth::user()->about()->first()->job_title)) {{ Auth::user()->about()->first()->job_title }} @endif -</p>
                        </div>
{{--                        <div class="row">--}}
{{--                            <span class="text-secondary">--}}
{{--                                <div class="d-flex gap-4 align-items-center justify-content-center">--}}
{{--                                    @if(isset($social->facebook_link))--}}
{{--                                        <a href="{{ $social->facebook_link }}" target="_blank" class=" d-flex  align-items-center justify-content-center">--}}
{{--                                            <i class="bi bi-facebook text-light"></i>--}}
{{--                                        </a>--}}
{{--                                    @endif--}}

{{--                                    @if(isset($social->twitter_link))--}}
{{--                                        <a href=" {{ $social->twitter_link }}" target="_blank" class=" d-flex align-items-center justify-content-center">--}}
{{--                                            <i class="bi bi-twitter text-light"></i>--}}
{{--                                        </a>--}}
{{--                                    @endif--}}

{{--                                    @if(isset($social->linkedin_link))--}}
{{--                                        <a href=" {{ $social->linkedin_link }}" target="_blank" class=" d-flex align-items-center justify-content-center">--}}
{{--                                        <i class="bi bi-linkedin text-light"></i>--}}
{{--                                    </a>--}}
{{--                                    @endif--}}

{{--                                    @if(isset($social->whatsapp_link))--}}
{{--                                        <a href=" {{ $social->whatsapp_link }}" target="_blank" class=" d-flex align-items-center justify-content-center">--}}
{{--                                            <i class="bi bi-linkedin text-light"></i>--}}
{{--                                        </a>--}}
{{--                                    @endif--}}

{{--                                    @if(isset($social->github_link))--}}
{{--                                        <a href=" {{ $social->github_link }}" target="_blank" class=" d-flex align-items-center justify-content-center">--}}
{{--                                            <i class="bi bi-linkedin text-light"></i>--}}
{{--                                        </a>--}}
{{--                                    @endif--}}
{{--                                </div>--}}
{{--                            </span>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
