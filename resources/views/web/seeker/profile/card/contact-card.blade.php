<article class="card shadow bg-white position-sticky p-3">
    <header class="card-header">
        <h1 class="text-primary fs-4">Contact Information</h1>
    </header>
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-1">
            <h4 class="fs-6 fw-bold">Email address</h4>
            <span class="text-secondary">{{ Auth::user()->email }}</span>
        </div>
        <div class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-1">
            <h4 class="fs-6 fw-bold">Mobile number</h4>
            <span class="text-secondary">{{ Auth::user()->phone }}</span>
        </div>
        <div class="d-flex justify-content-between align-items-center mb-3 border-bottom pb-1">
            <h4 class="fs-6 fw-bold">Social Media</h4>
            <span class="text-secondary">
                <div class="d-flex gap-4 align-items-center justify-content-center">
                    @if(isset($social->facebook_link))
                        <a href="{{ $social->facebook_link }}" target="_blank" class=" d-flex  align-items-center justify-content-center">
                            <i class="bi bi-facebook text-primary"></i>
                        </a>
                    @endif

                    @if(isset($social->twitter_link))
                        <a href=" {{ $social->twitter_link }}" target="_blank" class=" d-flex align-items-center justify-content-center">
                            <i class="bi bi-twitter text-primary"></i>
                        </a>
                    @endif

                    @if(isset($social->linkedin_link))
                        <a href=" {{ $social->linkedin_link }}" target="_blank" class=" d-flex align-items-center justify-content-center">
                        <i class="bi bi-linkedin text-primary"></i>
                    </a>
                    @endif

                    @if(isset($social->whatsapp_link))
                        <a href=" {{ $social->whatsapp_link }}" target="_blank" class=" d-flex align-items-center justify-content-center">
                            <i class="bi bi-linkedin text-primary"></i>
                        </a>
                    @endif

                    @if(isset($social->github_link))
                        <a href=" {{ $social->github_link }}" target="_blank" class=" d-flex align-items-center justify-content-center">
                            <i class="bi bi-linkedin text-primary"></i>
                        </a>
                    @endif
                </div>
            </span>
        </div>
    </div>
</article>
