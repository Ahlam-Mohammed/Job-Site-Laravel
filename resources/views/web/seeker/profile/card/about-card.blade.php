<article class="card shadow p-3">
    <header class="card-header">
        <h1 class="text-primary fs-4">About <span class="text-secondary">{{ Auth::user()->full_name }}</span></h1>
    </header>
    <div class="card-body">
        <p class="text-secondary">{{ $about->about }}.</p>
    </div>
</article>
