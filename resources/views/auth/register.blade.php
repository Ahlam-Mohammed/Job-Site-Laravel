@extends('layouts.web.master')

@section('content')

    <div class="container-sm">
        <section>
            <div class="row mt-lg-4 mt-md-4 mt-sm-4">
                <div class="col-lg-1 col-0"></div>
                <article class="col-lg-5 col-12 card shadow position-relative bg-login" style="background-color: #45465fe1; backdrop-filter: blur(6px);">
                    <div class="p-lg-4 p-0 text-center position-relative mt-lg-5 top-50" style="z-index: 19;">
                        <h1 class="text-light fs-3 mt-lg-4 text-uppercase fw-bold">Your career starts here</h1>
                        <p class="text-white-50">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto sunt rem eaque..</p>
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
                    <form method="post" action="{{ route('register') }}" class="row g-3 needs-validation" novalidate>
                        @csrf
                        <div class="col-12">
                            <h1 class="text-primary fw-bold">Sign up</h1>
                        </div>
                        <div class="col-12">
                            <div class="input-group flex-nowrap">
                                <input name="name" value="{{ old('name') }}" type="text" class="form-control @error('name') is-invalid @enderror rounded-pill" placeholder="Name" aria-label="lName" aria-describedby="addon-wrapping">
                            </div>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <div class="input-group flex-nowrap">
                                <input name="full_name" value="{{ old('full_name') }}" type="text" class="form-control @error('full_name') is-invalid @enderror rounded-pill" placeholder="Full Name" aria-label="lName" aria-describedby="addon-wrapping">
                            </div>
                            @error('full_name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <div class="input-group flex-nowrap">
                                <input name="email" value="{{ old('email') }}" type="email" class="form-control @error('email') is-invalid @enderror rounded-pill" placeholder="Email" aria-label="email" aria-describedby="addon-wrapping">
                            </div>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <div class="input-group flex-nowrap">
                                <input name="password" value="{{ old('password') }}" type="password" class="form-control @error('password') is-invalid @enderror rounded-pill" placeholder="Password" aria-label="password" aria-describedby="addon-wrapping">
                            </div>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <div class="input-group flex-nowrap">
                                <input name="password_confirmation" type="password" class="form-control rounded-pill" placeholder="Retype password" aria-label="password" aria-describedby="addon-wrapping">
                            </div>
                        </div>
                        <input hidden name="roles" value="{{ $role }}">
                        <button class="btn btn-primary d-block w-100" type="submit">Sign in</button>
                        <p class="fs-sm pt-3 mb-0">Already have an account? <a href="{{ route('login') }}" class="fw-medium" data-view="#modal-signup-view">Sign in</a></p>
                    </form>
                </article>
                <div class="position-absolute w-50 d-lg-block d-none" style="z-index: -1; right: 150px;">
                    <div class="position-absolute" style="z-index: -1;">
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
                </div>
                <div class="col-lg-1 col-0"></div>
            </div>
        </section>
    </div>

@endsection
