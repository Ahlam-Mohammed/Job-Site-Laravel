@extends('layouts.web.master')

@section('title') Contact-Us @endsection

@section('content')

    <div class="container-lg">
        <!-- Services Section -->
        <section class="row m-auto py-5 px-lg-0 px-md-0 px-sm-0 px-2">
            <div class="col-lg-1 col-0"></div>
            <div class="col-lg-5 col-md-6 col-12 m-0 p-0">
                <article class="card bg-white p-3 pb-5 w-100 h-100">
                    <div class="card-header bg-transparent">
                        <h1 class="fs-4 text-primary">Contact Information</h1>
                    </div>
                    <div class="card-body">
                        <div class="d-flex gap-2 align-items-center my-4">
                            <i class="bi bi-envelope text-secondary"></i>
                            <span class="text-black">Email: <a href="">job.com@gmail.com</a></span>
                        </div>
                        <div class="d-flex gap-2 align-items-center mb-4">
                            <i class="bi bi-phone text-secondary"></i>
                            <span class="text-black">Tel.: <a href="">+967 773 773 773</a></span>
                        </div>
                        <div class="d-flex gap-2 align-items-center mb-4">
                            <i class="bi bi-clock text-secondary"></i>
                            <span class="text-black">Working Hours: <a href="">9 AM - 6 PM (Sun to Thu)</a></span>
                        </div>
                        <div class="d-flex gap-4 align-items-center justify-content-center mt-5">
                            <div class=" d-flex rounded-circle logo border  shadow align-items-center justify-content-center">
                                <i class="bi bi-facebook text-primary"></i>
                            </div>
                            <div class=" d-flex rounded-circle logo border  shadow align-items-center justify-content-center">
                                <i class="bi bi-twitter text-primary"></i>
                            </div>
                            <div class=" d-flex rounded-circle logo border  shadow align-items-center justify-content-center">
                                <i class="bi bi-linkedin text-primary"></i>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-lg-5 col-md-6 col-12 m-0 p-0">
                <article class="card p-3 pb-5 w-100 h-100 suggestion" style="background-image: url(/images/circle/bg2.svg); background-position: center; background-size: cover;">
                    <div class="card-header border-bottom border-light bg-transparent">
                        <h1 class="fs-4 text-light">Send Suggestion</h1>
                    </div>
                    <div class="card-body d-flex justify-content-around align-items-center flex-column">
                        <input type="text" class="form-control bg-light rounded p-lg-3 p-md-2 w-100" placeholder="Send suggestion" aria-describedby="addon-wrapping">
                        <button class="btn btn-primary rounded px-4 w-50">Send</button>
                    </div>
                </article>
            </div>
            <div class="col-lg-1 col-0"></div>
        </section>
    </div>

@endsection
