@extends('layouts.web.master')

@section('content')

    <!-- Banner Section -->
    @include('banner.profile')

    <div class="container-lg mt-5">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-lg-5 col-md-12 col-12 mb-4">
                        <div class="row">
                            <!-- Information Seeker -->
                            <div class="col-12">
                                @if(isset($info))
                                    @include('web.seeker.profile.card.info-card')
                                @endif
                            </div>
                            <!-- Contact Information -->
                            <div class="col-12 mt-4">
                                @include('web.seeker.profile.card.contact-card')
                            </div>
                            <!-- Personal Information -->
                            <div class="col-12 mt-4">
                                @if(isset($personal))
                                    @include('web.seeker.profile.card.personal-card')
                                @endif
                            </div>
                            <!-- Skills -->
                            <div class="col-12 mt-4">
                                @include('web.seeker.profile.card.skill-card')
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 col-12 mb-4">
                        <div class="row">
                            <!-- About -->
                            <div class="col-12">
                                @if (isset($about))
                                    @include('web.seeker.profile.card.about-card')
                                @endif
                            </div>
                            <!-- Education -->
                            <div class="col-12 mt-4">
                                @if(isset($educations))
                                    @include('web.seeker.profile.card.education-card')
                                @endif
                            </div>
                            <!-- Experience -->
                            <div class="col-12 mt-4">
                                @if(isset($experiences))
                                    @include('web.seeker.profile.card.experience-card')
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="{{ route('show.cv', $user->id) }}" class="btn btn-sm btn-primary position-fixed" style="bottom: 10px; right: 20px;"> CV<i class="bi bi-download m-2"></i></a>

@endsection
