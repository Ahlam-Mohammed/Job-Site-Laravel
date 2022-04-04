<div class="col-lg-3 col-12 pb-4" style="background-image: url({{ asset('images/circle/bg-login.svg') }});background-size: cover;background-position: center;">
    <div class="row">
        <!-- Nav -->
        <div class="col-12">
            <div class="d-flex align-items-center mt-lg-3">
                <div class=" d-flex logo shadow align-items-center justify-content-center">
                    <a href="../index.html"><i class="bi bi-house-door-fill text-light"></i></a>
                </div>
            </div>
        </div>
        <!-- image profile -->
        <div class="col-lg-12 col-md-6 col-sm-6 col-10 m-auto d-flex justify-content-center align-items-center p-4 pt-0 position-relative">
            <img src="/images/me2.jpg" width="50%" class="img-fluid rounded-circle border border-2 shadow border-light" alt="">
            <a role="button" data-bs-toggle="modal" data-bs-target="#editImg" class="position-absolute bg-white
                                border border-primary rounded d-flex justify-content-center align-items-lg-center rounded-circle"
               style="bottom: 10%;left: 35%; width: 30px;height: 30px;">
                <i class="bi bi-pencil-square"></i>
            </a>
        </div>
        <div class="row text-center">
            <h1 class="text-light fs-3">Ahlam Mohammed</h1>
        </div>
        <div class="row text-center">
            <p class="text-white">- Full stack developer -</p>
        </div>
        <div class="row text-center">
            <button class="btn w-25 m-auto btn-sm btn-primary d-inline"><a href="../templates/profile.html" class="text-light">Profile</a></button>
        </div>
        <nav class="card bg-transparent px-3 py-4 mt-3 d-flex gap-3">
            <a href="{{ route('seeker.account') }}" class="text-primary d-flex align-items-center d-inline-block ms-3 border-bottom pb-2">
                <i class="fa fa-user pe-2"></i>
                <span class="fs-6 fw-normal">Account</span>
            </a>
            <a href="{{ route('seeker.skills.index') }}" class="text-light d-flex align-items-center d-inline-block ms-3 border-bottom pb-2">
                <i class="fa fa-shekel-sign pe-2"></i>
                <span class="fs-6 fw-normal">Skills</span>
            </a>

            <!-- experience -->
            <a href="{{ route('seeker.experiences.index') }}" class="text-light d-flex align-items-center d-inline-block ms-3 border-bottom pb-2">
                <i class="fa fa-object-group pe-2"></i>
                <span class="fs-6 fw-normal">Experience</span>
            </a>

            <!-- education -->
            <a href="{{ route('seeker.educations') }}" class="text-light d-flex align-items-center d-inline-block ms-3 border-bottom pb-2">
                <i class="fa fa-book pe-2"></i>
                <span class="fs-6 fw-normal">Education</span>
            </a>

            <!-- Courses -->
            <a href="{{ route('seeker.languages') }}" class="text-light d-flex align-items-center d-inline-block ms-3 border-bottom pb-2">
                <i class="fa fa-paperclip pe-2"></i>
                <span class="fs-6 fw-normal">Languages</span>
            </a>

            <!-- log out -->
            <a href="../../index.html" class="text-light d-flex align-items-center d-inline-block ms-3 border-bottom pb-2">
                <i class="fa fa-sign-out-alt pe-2"></i>
                <span class="fs-6 fw-normal">Logout</span>
            </a>
        </nav>
    </div>
</div>
