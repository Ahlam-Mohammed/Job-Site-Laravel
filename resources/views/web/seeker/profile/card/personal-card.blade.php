<article class="card shadow position-sticky p-3">
    <header class="card-header">
        <h1 class="text-primary fs-4">Personal Information</h1>
    </header>
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-1">
            <h4 class="fs-6 fw-bold">Birth date</h4>
            <span class="text-secondary">{{ $personal->birth }}</span>
        </div>
        <div class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-1">
            <h4 class="fs-6 fw-bold">Nationality</h4>
            <span class="text-secondary">{{ $personal->nationality }}</span>
        </div>
        <div class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-1">
            <h4 class="fs-6 fw-bold">Residence country</h4>
            <span class="text-secondary">{{ $personal->residence_country }}</span>
        </div>
        <div class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-1">
            <h4 class="fs-6 fw-bold">Gender</h4>
            <span class="text-secondary"> @if($personal->gender === 1) Female @else Male @endif</span>
        </div>
    </div>
</article>
