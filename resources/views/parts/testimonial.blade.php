<!-- Testiminial Start -->
<div class="container-fluid testimonial py-5">
    <div class="container py-5">
        <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
            <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">Testimonial</h5>
            <h1 class="display-5 w-50 mx-auto">What Clients Say About Our Services</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay=".5s">
            @foreach ($testimonials as $one)
            <div class="testimonial-item">
                <div class="testimonial-content rounded mb-4 p-4">
                    <p class="fs-5 m-0">{{ $one->content }}</p>
                </div>
                <div class="d-flex align-items-center  mb-4" style="padding: 0 0 0 25px;">
                    <div class="position-relative">
                        <img src="{{ $one->user->image_path }}" class="img-fluid rounded-circle py-2" alt="">
                        <div class="position-absolute" style="top: 33px; left: -25px;">
                            <i class="fa fa-quote-left rounded-pill bg-primary text-dark p-3"></i>
                        </div>
                    </div>
                    <div class="ms-3">
                        <h4 class="mb-0">{{ $one->user->name }}</h4>
                        <p class="mb-1">{{ $one->user->name }}</p>
                        <div class="d-flex">
                            @for($i = 0 ; $i < $one->rate ; ++$i)
                            <small class="fas fa-star text-primary me-1"></small>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Testiminial End -->
