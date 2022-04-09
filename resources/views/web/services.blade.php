@extends('layouts.web.master')

@section('title') Services @endsection

@section('content')

    <!-- Banner Section -->
    @include('banner.services')

    <div class="container-lg">
        <!-- Services Section -->
        <section class="row py-5 px-lg-0 px-md-0 px-sm-0 px-2 ">
            <!-- Single Service -->
            <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                <article class="card p-4 shadow border-radius mb-4">
                    <div class="d-flex gap-2 justify-content-center align-items-center flex-column">
                        <img src="/images/services/company.svg" width="40%" class="img-fluid" alt="">
                        <h1 class="fs-3 text-primary">Anything</h1>
                        <p class="text-black-50">Lorem ipsum dolor sit amet.</p>
                    </div>
                </article>
            </div>
            <!-- Single Service -->
            <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                <article class="card p-4 shadow border-radius mb-4">
                    <div class="d-flex gap-2 justify-content-center align-items-center flex-column">
                        <img src="/images/services/company.svg" width="40%" class="img-fluid" alt="">
                        <h1 class="fs-3 text-primary">Anything</h1>
                        <p class="text-black-50">Lorem ipsum dolor sit amet.</p>
                    </div>
                </article>
            </div>
            <!-- Single Service -->
            <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                <article class="card p-4 shadow border-radius mb-4">
                    <div class="d-flex gap-2 justify-content-center align-items-center flex-column">
                        <img src="/images/services/company.svg" width="40%" class="img-fluid" alt="">
                        <h1 class="fs-3 text-primary">Anything</h1>
                        <p class="text-black-50">Lorem ipsum dolor sit amet.</p>
                    </div>
                </article>
            </div>
            <!-- Single Service -->
            <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                <article class="card p-4 shadow border-radius mb-4">
                    <div class="d-flex gap-2 justify-content-center align-items-center flex-column">
                        <img src="/images/services/company.svg" width="40%" class="img-fluid" alt="">
                        <h1 class="fs-3 text-primary">Anything</h1>
                        <p class="text-black-50">Lorem ipsum dolor sit amet.</p>
                    </div>
                </article>
            </div>
        </section>
    </div>

@endsection
