        <!-- Project Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
                    <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">Our Project</h5>
                    <h1 class="display-5">Our recently completed projects</h1>
                </div>
                <div class="row g-5">
                    @foreach ($projects as $one)
                    <div class="col-xxl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".3s">
                        <div class="project-item">
                            <div class="project-left bg-dark"></div>
                            <div class="project-right bg-dark"></div>
                            <img src="{{ $one->image_path }}" class="img-fluid h-100" alt="img">
                            <a href="{{ route('Projects') }}" class="fs-4 fw-bold text-center">{{ $one->name }}</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Project End -->
