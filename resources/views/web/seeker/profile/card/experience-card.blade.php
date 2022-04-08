<article class="card shadow p-3">
    <header class="card-header">
        <h1 class="text-primary fs-4">Experience</h1>
    </header>
    <div class="card-body">
        <div class="row">
        @foreach($experiences as $experience)
            <!-- single experience -->
                <div class="col-12 mb-5">
                    <div class=" shadow-sm p-3">
                        <div class="d-flex gap-3 align-items-center">
                            <h4 class="text-primary">{{ $experience->job_title }}</h4>
                        </div>
                        <div class="">
                            <a class="text-black fs-6 d-flex flex-column">
                                <span>{{ $experience->career_field }} - {{ $experience->company_name }}</span>
                            </a>
                            <span class="text-black-50">{{ $experience->start_date }} - {{ $experience->end_date }}</span>
                            <p class="text-dark mt-3">{{ $experience->desc }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</article>
