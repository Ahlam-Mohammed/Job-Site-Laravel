<nav class="navbar navbar-expand-lg bg top-header">
    <div class="container">
        <div class="row w-100 align-items-center">
            <div class="col-lg-1 col-2">
                <a class="navbar-brand text-white fw-bold" href="{{ route('home') }}">Job.com</a>
            </div>
            <div class="col-lg-1 col-8">
                <div class="dropdown w-100 d-lg-none d-inline-flex">
                    <a class="text-center text-light mt-1" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="true">
                        <img src="assets/images/me2.jpg" width="15%" class="img-fluid rounded-circle border border-2 border-secondary shadow-sm" alt="">
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="{{ route('seeker.profile') }}"><i class="bi bi-person-fill m-2"></i> Profile</a></li>
                        <li><a class="dropdown-item" href="{{ route('seeker.dashboard') }}"><i class="bi bi-speedometer m-2"></i> Dashboard</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="templates/login.html"><i class="bi bi-box-arrow-down-right m-2"></i> Sign out</a></li>
                    </ul>
                </div>
                @if (Route::has('login'))
                    <div class="">
                        @auth
                            <div class="dropdown w-100 d-lg-none d-inline-flex">
                                <a class="text-center text-light mt-1" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="true">
                                    <img src="{{ 'images/user/'.Auth::user()->avatar }}" width="15%" class="img-fluid rounded-circle border border-2 border-secondary shadow-sm" alt="">
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li><a class="dropdown-item" href="{{ route('seeker.profile') }}"><i class="bi bi-person-fill m-2"></i> Profile</a></li>
                                    <li><a class="dropdown-item" href="{{ route('seeker.dashboard') }}"><i class="bi bi-speedometer m-2"></i> Dashboard</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-down-right m-2" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"></i> تسجيل الخروج</a></li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </ul>
                            </div>
                        @endauth
                    </div>
                @endif
            </div>
            <div class="col-lg-1 col-2">
                <a class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="bi bi-list fs-2 text-light"></span>
                </a>
            </div>
            <div class="col-lg-7 col-0">
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav">
                        <li class="nav-item mx-2">
                            <a class="nav-link text-light active" aria-current="page" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link text-light" href="{{ route('jobs') }}">Find Jobs</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link text-light" href="{{ route('companies') }}">Companies</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a href="{{ route('about') }}" class="nav-link text-light">About Us</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link text-light" href="{{ route('service') }}">Services</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link text-light" href="{{ route('contact') }}">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-0">
                @if (Route::has('login'))
                    <div class="">
                        @auth
                            <div class="dropdown d-lg-inline-flex d-none">
                                <a class="dropdown-toggle text-center text-light mt-1" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="true">
                                    <span>{{ Auth::user()->name }}</span>
                                    <img src="{{ 'images/user/'.Auth::user()->avatar }}" width="20%" class="img-fluid rounded-circle border border-2 border-secondary shadow-sm" alt="">
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li><a class="dropdown-item" href="{{ route('seeker.profile') }}"><i class="bi bi-person-fill m-2"></i> Profile</a></li>
                                    <li><a class="dropdown-item" href="{{ route('seeker.dashboard') }}"><i class="bi bi-speedometer m-2"></i> Dashboard</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="bi bi-box-arrow-down-right m-2"></i> Sign out</a></li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </ul>
                            </div>
                        @else
                            <div class="d-lg-flex d-none justify-content-end gap-4">
                                <a href="{{ route('login') }}" class="text-light">Log in</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register.way') }}" class="text-light">Register</a>
                                @endif
                            </div>
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </div>
</nav>
