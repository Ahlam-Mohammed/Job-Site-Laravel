<article class="card shadow bg-white position-sticky p-3">
    <header class="card-header">
        <h1 class="text-primary fs-4">About Company</h1>
    </header>
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-1">
            <h4 class="fs-6 fw-bold">Email address</h4>
            <span class="text-secondary">{{ $company->email }}</span>
        </div>
        <div class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-1">
            <h4 class="fs-6 fw-bold">Mobile number</h4>
            <span class="text-secondary">{{ $company->phone }}</span>
        </div>
        <div class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-1">
            <h4 class="fs-6 fw-bold">industry</h4>
            <span class="text-secondary">{{ $company->industry }}</span>
        </div>
        <div class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-1">
            <h4 class="fs-6 fw-bold">country</h4>
            <span class="text-secondary">{{ $company->country }}</span>
        </div>

    </div>
</article>
