<article class="card shadow p-3">
    <header class="card-header">
        <h1 class="text-primary fs-4">Skills</h1>
    </header>
    <div class="card-body">
        <div class="row">
            @if(isset($skills))
                @foreach($skills as $skill)
                    <!-- single skill -->
                        <div class="col-12 mb-2">
                            <div class=" shadow-sm p-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h5>{{ $skill->name }}</h5>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: {{ $skill->level }}%;" aria-valuenow="{{ $skill->level }}" aria-valuemin="0" aria-valuemax="100">{{ $skill->level }}%</div>
                                </div>
                            </div>
                        </div>
                @endforeach
            @endif
        </div>
    </div>
</article>
