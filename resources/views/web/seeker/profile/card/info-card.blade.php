<article class="card shadow bg-white position-sticky p-3">
    <header class="card-header">
        <h1 class="text-primary fs-4">Information</h1>
    </header>
    <div class="card-body">
        @foreach($info as $inf)
            <div class="col-12 mb-3">
                <div class="shadow-sm p-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="text-primary">{{ $inf->job_title }}</h5>
                    </div>
                    <a class="text-secondary fs-6  mb-0" href="#">{{ $inf->career_field }}<span class="fw-light fs-6">- {{ $inf->professional_level }}</span></a>
                </div>
            </div>
        @endforeach
    </div>
</article>
