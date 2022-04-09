@extends('layouts.web.master')

@section('content')

    <div class="container-sm">
        <section>
            <div class="row mt-lg-5 mt-md-4 mt-sm-4">
                <div class="col-lg-1 col-0"></div>
                <article class="col-lg-5 col-12 card shadow position-relative bg-login" style="background-color: #45465fe1; backdrop-filter: blur(6px);">
                    <div class="p-lg-4 p-0 text-center position-relative mt-lg-5 top-50" style="z-index: 19;">
                        <h1 class="text-light fs-3 mt-lg-4 text-uppercase fw-bold">Reset Your Password</h1>
                    </div>
                    <div class="position-absolute">
                        <img src="{{ asset('images/circle/layer01.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="position-absolute">
                        <img src="{{ asset('images/circle/layer02.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="position-absolute">
                        <img src="{{ asset('images/circle/layer03.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="position-absolute">
                        <img src="{{ asset('images/circle/layer04.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="position-absolute">
                        <img src="{{ asset('images/circle/layer05.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="position-absolute">
                        <!-- <img src="../assets/images/circle/layer06.png" class="img-fluid" alt=""> -->
                    </div>
                </article>
                <article class="col-lg-5 col-12 card shadow p-lg-5 p-4" style="background-color: #ffffffed;; backdrop-filter: blur(6px);">
                    <form method="POST" action="{{ route('password.update') }}" class="row g-3 needs-validation" novalidate>
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="col-12">
                            <h1 class="text-primary fw-bold">{{ __('Reset Password') }}</h1>
                        </div>
                        <div class="col-12 input-group flex-nowrap position-relative">
                            <div class="position-absolute top-50 start-0 translate-middle-y ms-4" style="z-index: 999;">
                                <i class="bi bi-envelope text-black-50"></i>
                            </div>
                            <input name="email" value="{{ $email ?? old('email') }}" type="email" class="form-control @error('email') is-invalid @enderror rounded-pill pl" placeholder="Email" aria-label="email" aria-describedby="addon-wrapping">
                        </div>
                        @error('email')
                        <span class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                        <div class="col-12 input-group flex-nowrap position-relative">
                            <div class="position-absolute top-50 start-0 translate-middle-y ms-4" style="z-index: 999;">
                                <i class="bi bi-lock text-black-50"></i>
                            </div>
                            <input name="password" type="password" class="form-control  @error('password') is-invalid @enderror rounded-pill pl" placeholder="Password" aria-label="password" aria-describedby="addon-wrapping">
                        </div>
                        @error('password')
                        <span class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                        <div class="col-12 input-group flex-nowrap position-relative">
                            <div class="position-absolute top-50 start-0 translate-middle-y ms-4" style="z-index: 999;">
                                <i class="bi bi-lock text-black-50"></i>
                            </div>
                            <input name="password_confirmation" type="password" class="form-control rounded-pill pl" placeholder="Confirm Password" aria-label="password" aria-describedby="addon-wrapping" autocomplete="new-password">
                        </div>

                        <button class="btn btn-primary d-block w-100" type="submit">{{__('Reset Password')}}</button>
                    </form>
                </article>
                <div class="position-absolute w-50 d-lg-block d-none" style="z-index: -1; right: 150px;">
                    <div class="position-absolute" style="z-index: -1;">
                        <img src="{{ asset('images/circle/layer01.png') }}" width="65%" class="img-fluid" alt="">
                    </div>
                    <div class="position-absolute">
                        <img src="{{ asset('images/circle/layer02.png') }}" width="65%" class="img-fluid" alt="">
                    </div>
                    <div class="position-absolute">
                        <img src="{{asset('images/circle/layer03.png')}}" width="65%" class="img-fluid" alt="">
                    </div>
                    <div class="position-absolute">
                        <img src="{{ asset('images/circle/layer04.png') }}" width="65%" class="img-fluid" alt="">
                    </div>
                    <div class="position-absolute">
                        <img src="{{ asset('images/circle/layer05.png') }}" width="65%" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-1 col-0"></div>
            </div>
        </section>
    </div>

@endsection
