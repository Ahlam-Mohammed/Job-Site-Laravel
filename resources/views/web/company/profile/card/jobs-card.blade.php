@php use App\Enum\CompanyEnum @endphp
<article class="card shadow bg-white position-sticky p-3">
    <header class="card-header">
        <h1 class="text-primary fs-4">Jobs</h1>
    </header>
    <div class="card-body">
        @foreach($jobs as $job)
            <article class="card p-lg-3 p-md-2 p-1 mb-3 shadow-sm search-job" role="button">
                <div class="card-title d-flex justify-content-between align-items-center m-0">
                    <div class="px-2 s">
                        <h3 class="mb-0"><a class="text-primary fs-5 fw-bold" href="{{ route('details.job',$job->id) }}">{{ $job->job_title }} / {{ $job->career_field	 }}</a></h3>
                        <a class="text-secondary fs-5 fw-bold mb-0" href="#">@if(isset($job->user->company->name)) {{ $job->user->company->name }} @else Job.com @endif <span class="fw-light fs-6">- @if(isset($job->user->company->country)) {{ $job->user->company->country }} @endif</span></a>
                    </div>
                    <div class="p-1 rounded d-flex justify-content-center logo-lg shadow-sm mt-2 ml-5">
                        <img class="img-fluid" src="@if (isset($job->user->company->logo)) {{ asset(CompanyEnum::COMPANY_LOGO_PATH.$job->user->company->logo) }} @else {{ asset(CompanyEnum::COMPANY_LOGO_DEFAULT) }} @endif" width="100%" alt="microsoft">
                    </div>
                </div>
                <div class="card-body p-md-2">
                    <div class="row card-link d-flex align-items-center justify-content-between mt-2">
                        <div class="col-12 fs-7">
                            <div class="d-inline-block px-1">
                                <a href="{{ route('details.job', $job->id) }}">
                                    <i class="bi bi-briefcase text-primary"></i>
                                    <span class="text-secondary">{{ $job->professional_level }}</span>
                                </a>
                            </div>
                            <div class="d-inline-block px-1">
                                <a href="{{ route('details.job', $job->id) }}">
                                    <i class="bi bi-hourglass text-primary"></i>
                                    <span class="text-secondary">{{ $job->type }}</span>
                                </a>
                            </div>
                            <div class="d-inline-block px-1">
                                <a href="{{ route('details.job', $job->id) }}">
                                    <i class="bi bi-cash-stack text-primary"></i>
                                    <span class="text-secondary">${{ $job->max_salary }} - ${{ $job->min_salary }}</span>
                                </a>
                            </div>
                            <div class="d-inline-block px-1">
                                <a href="{{ route('details.job', $job->id) }}">
                                    <i class="bi bi-clock text-primary"></i>
                                    <span class="text-secondary">{{ $job->created_at->format('Y-m-d') }}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row card-link d-flex align-items-center justify-content-between mt-2">
                        <div class="col-12 fs-7 text-end">
                            <div class="d-inline-block px-1">
                                <a>
                                    @if($job->is_active === 1)
                                        <span class="badge bg-success p-2 fs-7 fw-normal"> Active</span>
                                    @else
                                        <span class="badge bg-secondary p-2 fs-7 fw-normal"> DeActive</span>
                                    @endif
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        @endforeach
    </div>
</article>
