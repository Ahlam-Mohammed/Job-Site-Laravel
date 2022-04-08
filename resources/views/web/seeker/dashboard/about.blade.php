@extends('layouts.web.seeker.master')
@section('content')

    <div class="row p-lg-4">
        <div class="col-12 mb-3">
            <div class="card  shadow p-3">
                <div class="card-header">
                    <h1 class="fs-3 fw-bold text-primary">About You</h1>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <form action="{{ route('seeker.about.store')}}" method="post" class="row g-3 needs-validation" novalidate>
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Job Title</label>
                                    <input name="job_title" type="text" value="@if(isset($user->job_title)) {{ $user->job_title }} @endif" class="form-control @error('job_title') is-invalid @enderror" id="exampleFormControlInput1" placeholder="Job Title">
                                    @error('job_title') <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span> @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">About You</label>
                                    <textarea name="about" class="form-control @error('about') is-invalid @enderror" id="exampleFormControlTextarea1" rows="3">
                                        @if(isset($user->about)) {{ $user->about }} @endif
                                    </textarea>
                                    @error('about') <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span> @enderror
                                </div>
                                <div class="col-12 mt-5">
                                    <button class="btn btn-primary d-block w-100 rounded-pill" type="submit">حفظ</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
