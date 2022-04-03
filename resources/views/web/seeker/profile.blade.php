@extends('layouts.web.master')

@section('content')

    <div class="container-lg mt-5">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-lg-5 col-md-12 col-12 mb-4">
                        <div class="row">
                            <!-- Contact Information -->
                            <div class="col-12">
                                <article class="card shadow bg-white position-sticky p-3">
                                    <header class="card-header">
                                        <h1 class="text-primary fs-4">Contact Information</h1>
                                    </header>
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-1">
                                            <h4 class="fs-6 fw-bold">Email address</h4>
                                            <span class="text-secondary">ahlam.m.alfashq@gmail.com</span>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-1">
                                            <h4 class="fs-6 fw-bold">Mobile number</h4>
                                            <span class="text-secondary">(+967)773773773</span>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <!-- Personal Information -->
                            <div class="col-12 mt-4">
                                <article class="card shadow position-sticky p-3">
                                    <header class="card-header">
                                        <h1 class="text-primary fs-4">Personal Information</h1>
                                    </header>
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-1">
                                            <h4 class="fs-6 fw-bold">Birth date</h4>
                                            <span class="text-secondary">31 May 1998</span>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-1">
                                            <h4 class="fs-6 fw-bold">Nationality</h4>
                                            <span class="text-secondary">Yemeni</span>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-1">
                                            <h4 class="fs-6 fw-bold">Residence country</h4>
                                            <span class="text-secondary">Yemen</span>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-1">
                                            <h4 class="fs-6 fw-bold">Gender</h4>
                                            <span class="text-secondary">Female</span>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <!-- Skills -->
                            <div class="col-12 mt-4">
                                <article class="card shadow p-3">
                                    <header class="card-header">
                                        <h1 class="text-primary fs-4">Skills</h1>
                                    </header>
                                    <div class="card-body">
                                        <div class="row">
                                            <!-- single skill -->
                                            <div class="col-12 mb-2">
                                                <div class=" shadow-sm p-3">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <h5>Leadership Skills</h5>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single skill -->
                                            <div class="col-12 mb-2">
                                                <div class=" shadow-sm p-3">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <h5>Problem Solving</h5>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single skill -->
                                            <div class="col-12 mb-2">
                                                <div class=" shadow-sm p-3">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <h5>Teamwork Skills</h5>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" style="width: 95%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">95%</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single skill -->
                                            <div class="col-12 mb-2">
                                                <div class=" shadow-sm p-3">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <h5>Writing Content</h5>
                                                    </div>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 col-12 mb-4">
                        <div class="row">
                            <!-- About -->
                            <div class="col-12">
                                <article class="card shadow p-3">
                                    <header class="card-header">
                                        <h1 class="text-primary fs-4">About <span class="text-secondary">Ahlam Mohammed</span></h1>
                                    </header>
                                    <div class="card-body">
                                        <p class="text-secondary">My name is Ahlam Mohammed, I'm a Full stack developer with a great passion for programming. I am passionate about delivering solutions that add to people's lives and at the same time challenge me. Improved my skills as a Front-End and Back-End developer.</p>
                                        <p class="text-secondary">I develop websites and applications using HTML, CSS, and php. I'm always improving myself with each project I get my hands on.</p>
                                    </div>
                                </article>
                            </div>
                            <!-- Education -->
                            <div class="col-12 mt-4">
                                <article class="card shadow p-3">
                                    <header class="card-header">
                                        <h1 class="text-primary fs-4">Education</span></h1>
                                    </header>
                                    <div class="card-body">
                                        <!-- single experience -->
                                        <div class="col-12 mb-5">
                                            <div class=" shadow-sm p-3">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <a href="../templates/detailsExp.html"><h4><b>Information Technology</b> <span class="fs-5">, Bachelor's degree</span></h4></a>
                                                </div>
                                                <div class="">
                                                    <a href="../templates/detailsExp.html" class="text-black-50 fs-6 d-flex flex-column">
                                                        <h6 class="text-black">University of Science and Technology</h6>
                                                        <span>Yemen - Sanaa</span>
                                                        <span>May 2021</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <!-- Experience -->
                            <div class="col-12 mt-4">
                                <article class="card shadow p-3">
                                    <header class="card-header">
                                        <h1 class="text-primary fs-4">Experience</h1>
                                    </header>
                                    <div class="card-body">
                                        <div class="row">
                                            <!-- single experience -->
                                            <div class="col-12 mb-5">
                                                <div class=" shadow-sm p-3">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <a href="../templates/detailsExp.html"><h4>Web Developer at softUpgrade Company</h4></a>
                                                    </div>
                                                    <div class="">
                                                        <a href="../templates/detailsExp.html" class="text-black-50 fs-6 d-flex flex-column">
                                                            <span>Yemen - Sanaa</span>
                                                            <span>My current job since January 2020</span>
                                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, velit!</p>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single experience -->
                                            <div class="col-12 mb-5">
                                                <div class=" shadow-sm p-3">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <a href="../templates/detailsExp.html"><h4>Web Developer at start Company</h4></a>
                                                    </div>
                                                    <div class="">
                                                        <a href="../templates/detailsExp.html" class="text-black-50 fs-6 d-flex flex-column">
                                                            <span>Yemen - Sanaa</span>
                                                            <span>My current job since January 2020</span>
                                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, velit!</p>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
