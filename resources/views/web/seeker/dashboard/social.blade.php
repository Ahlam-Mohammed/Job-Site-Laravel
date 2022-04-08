@extends('layouts.web.seeker.master')
@section('content')

    <div class="row p-lg-4">
        <div class="col-12 mb-3">
            <div class="card  shadow p-3">
                <div class="card-header">
                    <h1 class="fs-3 fw-bold text-primary">Social Media</h1>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <form action="{{ route('seeker.social.store')}}" method="post" class="row g-3 needs-validation" novalidate>
                                @csrf
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-facebook text-primary"></i></span>
                                    <input name="facebook_link" @if (isset($social->facebook_link)) value="{{ $social->facebook_link }}" @endif type="url" class="form-control @error('facebook_link') is-invalid @enderror" placeholder="Facebook Link">
                                </div>
                                @error('facebook_link') <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span> @enderror
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-twitter text-primary"></i></span>
                                    <input name="twitter_link" @if (isset($social->twitter_link)) value="{{ $social->twitter_link }}" @endif type="url" class="form-control @error('twitter_link') is-invalid @enderror" placeholder="Twitter Link">
                                </div>
                                @error('twitter_link') <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span> @enderror
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-linkedin text-primary"></i></span>
                                    <input name="linkedin_link" @if (isset($social->linkedin_link)) value="{{ $social->linkedin_link }}" @endif type="url" class="form-control @error('linkedin_link') is-invalid @enderror" placeholder="Linkedin Link">
                                </div>
                                @error('linkedin_link') <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span> @enderror
                                <div class="input-group">
                                    <span class="input-group-text">@</span>
                                    <input name="whatsapp_link" @if (isset($social->whatsapp_link)) value="{{ $social->whatsapp_link }}" @endif type="url" class="form-control @error('whatsapp_link') is-invalid @enderror" placeholder="Whatsapp Link">
                                </div>
                                @error('whatsapp_link') <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span> @enderror
                                <div class="input-group">
                                    <span class="input-group-text">@</span>
                                    <input name="github_link" @if (isset($social->github_link)) value="{{ $social->github_link }}" @endif type="url" class="form-control @error('github_link') is-invalid @enderror" placeholder="GitHub Link">
                                </div>
                                @error('github_link') <span id="exampleInputEmail1-error" class="error invalid-feedback">{{ $message }}</span> @enderror
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
