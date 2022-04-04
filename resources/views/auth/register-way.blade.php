@extends('layouts.web.master')

@section('content')

    <div class="container-sm" style="direction: rtl">
        <section class="d-flex justify-content-center align-items-center" style="height: 600px">
            <div class="row mt-lg-4 mt-md-4 mt-sm-4">
                <article class="col-lg-12 m-auto col-12 card shadow p-lg-5 p-4" style="background-color: #ffffffed;; backdrop-filter: blur(6px);">
                    <form class="row g-3 needs-validation" novalidate>
                        <div class="col-12">
                            <h1 class="text-primary fw-bold"></h1>
                        </div>
                        <a href="{{ route('registerUser',['SEEKER']) }}" class="btn btn-primary d-block w-100" type="submit">إنشاء حساب (Seeker)</a>
                        <a href="{{ route('registerUser',['COMPANY']) }}" class="btn btn-primary d-block w-100" type="submit">إنشاء حساب (Company Employment)</a>
                    </form>
                </article>
            </div>
        </section>
    </div>

@endsection
