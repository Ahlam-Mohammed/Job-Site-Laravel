<section class="banner" style="background-image: url({{ asset('images/circle/bg-none.svg') }}); background-size: cover; height: 25vh;background-position: center;">
    <div class="container-lg">
        <div class="row">
            <div class="col-12">
                <div class="d-flex flex-column">
                    <h1 class="fs-2 fw-bold text-light mt-lg-5 mt-2">{{ $job->job_title }}</h1>
                    <div class="row card-link d-flex align-items-center justify-content-between mt-2">
                        <div class="col-12 fs-7">
                            <div class="d-inline-block px-1">
                                <a>
                                    <i class="bi bi-briefcase text-light m-1"></i>
                                    <span class="text-white">{{ $job->professional_level }}</span>
                                </a>
                            </div>
                            <div class="d-inline-block px-1">
                                <a>
                                    <i class="bi bi-hourglass text-light m-1"></i>
                                    <span class="text-white">{{ $job->type }}</span>
                                </a>
                            </div>
                            <div class="d-inline-block px-1">
                                <a>
                                    <i class="bi bi-cash-stack text-light m-1"></i>
                                    <span class="text-white">${{ $job->max_salary }} - ${{ $job->min_salary }}</span>
                                </a>
                            </div>
                            <div class="d-inline-block px-1">
                                <a>
                                    <i class="bi bi-clock text-light m-1"></i>
                                    <span class="text-white">{{ $job->created_at->format('Y-m-d') }}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
