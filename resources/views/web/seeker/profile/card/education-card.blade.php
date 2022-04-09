<article class="card shadow p-3">
    <header class="card-header">
        <h1 class="text-primary fs-4">Education</h1>
    </header>
    <div class="card-body">
    @foreach($educations as $education)
        <!-- single experience -->
            <div class="col-12 mb-5">
                <div class=" shadow-sm p-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="text-primary">{{ $education->academic_spec }} <span class="fs-5">, {{ $education->type }}</span></h4>
                    </div>
                    <div class="">
                        <a class="text-black-50 fs-6 d-flex flex-column">
                            <h6 class="text-black">{{ $education->university }}</h6>
                            <span>{{ $education->graduat_date }} - {{ $education->average }}</span>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</article>
