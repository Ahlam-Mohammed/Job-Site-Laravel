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
                            <!-- About Company -->
                            <div class="col-12 mt-4">
                                @if(isset($company))
                                    @include('web.company.profile.card.about-card')
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 col-12 mb-4">
                        <div class="row">
                            <!-- Jobs -->
                            <div class="col-12 mt-4">
                                @if(isset($jobs))
                                    @include('web.company.profile.card.jobs-card')
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
