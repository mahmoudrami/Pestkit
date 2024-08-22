@extends('website.master')
@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid carousel px-0 mb-5 pb-5">
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true"
                    aria-label="First slide"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                @foreach ($sliders as $slider)
                    <div class="carousel-item {{ $loop->iteration == 1 ? 'active' : '' }}">
                        <img src="{{ asset('website/img/carousel-2.jpg') }}" class="img-fluid w-100" alt="First slide">
                        <div class="carousel-caption">
                            <div class="container carousel-content">
                                <h4 class="text-white mb-4 animated slideInDown">{{ $slider->title }}</h4>
                                <h1 class="text-white display-1 mb-4 animated slideInDown">{{ $slider->content }}</h1>
                                <a href="" class="me-2"><button type="button"
                                        class="px-5 py-3 btn btn-primary border-2 rounded-pill animated slideInDown">Read
                                        More</button></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev btn btn-primary border border-2 border-start-0 border-primary"
                type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next btn btn-primary border border-2 border-end-0 border-primary" type="button"
                data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Get In Touch Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay=".3s">
        <div class="container py-5">
            <div class="bg-light px-4 py-5 rounded">
                <div class="text-center">
                    <h1 class="display-5 mb-5">Find Your Pest Control Services</h1>
                </div>
                <form class="text-center mb-4" action="#">
                    <div class="row g-4">
                        <div class="col-xl-10 col-lg-12">
                            <div class="row g-4">
                                <div class="col-md-6 col-xl-3">
                                    <select class="form-select p-3 border-0">
                                        <option value="Type Of Service" class="">Type Of Service</option>
                                        <option value="Pest Control-2">Pest Control-2</option>
                                        <option value="Pest Control-3">Pest Control-3</option>
                                        <option value="Pest Control-4">Pest Control-4</option>
                                        <option value="Pest Control-5">Pest Control-5</option>
                                    </select>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <input type="text" class="form-control p-3 border-0" placeholder="Name">
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <input type="text" class="form-control p-3 border-0" placeholder="Phone">
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <input type="email" class="form-control p-3 border-0" placeholder="Email">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-12">
                            <input type="button" class="btn btn-primary w-100 p-3 border-0" value="GET STARTED">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Get In Touch End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay=".3s">
                    <div class="about-img">
                        <div class="rotate-left bg-dark"></div>
                        <div class="rotate-right bg-dark"></div>
                        <img src="{{ asset('website/img/about-img.jpg') }}" class="img-fluid h-100" alt="img">
                        <div class="bg-white experiences">
                            <h1 class="display-3">20</h1>
                            <h6 class="fw-bold">Years Of Experiences</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay=".6s">
                    <div class="about-item overflow-hidden">
                        <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">
                            About PestKit</h5>
                        <h1 class="display-5 mb-2">World Best Pest Control Services Since 2008</h1>
                        <p class="fs-5" style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipiscing
                            elit sed do eiu smod tempor incididunt ut labore dolore magna aliqua.Quis ipsum suspen disse
                            ultrices gravida Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                        <div class="row">
                            <div class="col-3">
                                <div class="text-center">
                                    <div class="p-4 bg-dark rounded d-flex"
                                        style="align-items: center; justify-content: center;">
                                        <i class="fas fa-city fa-4x text-primary"></i>
                                    </div>
                                    <div class="my-2">
                                        <h5>Building</h5>
                                        <h5>Cleaning</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="text-center">
                                    <div class="p-4 bg-dark rounded d-flex"
                                        style="align-items: center; justify-content: center;">
                                        <i class="fas fa-school fa-4x text-primary"></i>
                                    </div>
                                    <div class="my-2">
                                        <h5>Education</h5>
                                        <h5>center</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="text-center">
                                    <div class="p-4 bg-dark rounded d-flex"
                                        style="align-items: center; justify-content: center;">
                                        <i class="fas fa-warehouse fa-4x text-primary"></i>
                                    </div>
                                    <div class="my-2">
                                        <h5>Warehouse</h5>
                                        <h5>Cleaning</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="text-center">
                                    <div class="p-4 bg-dark rounded d-flex"
                                        style="align-items: center; justify-content: center;">
                                        <i class="fas fa-hospital fa-4x text-primary"></i>
                                    </div>
                                    <div class="my-2">
                                        <h5>Hospital</h5>
                                        <h5>Cleaning</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('Services') }}"><button type="button"
                                class="btn btn-primary border-0 rounded-pill px-4 py-3 mt-5">Find Services</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    @include('parts.service', ['services' => $services])

    @include('parts.projects', ['projects' => $projects])

    @include('parts.blog', ['blogs' => $blogs])

    <!-- Call To Action Start -->
    <div class="container-fluid py-5 call-to-action wow fadeInUp" data-wow-delay=".3s" style="margin: 6rem 0;">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6">
                    <img src="{{ asset('website/img/action.jpg') }}" class="img-fluid w-100 rounded-circle p-5"
                        alt="">
                </div>
                <div class="col-lg-6 my-auto">
                    <div class="text-start mt-4">
                        <h1 class="pb-4 text-white">Sign Up To Our Newsletter To Get The Latest Offers</h1>
                    </div>
                    <form method="POST" action="{{ route('sendEmail') }}">
                        @csrf
                        <div class="form-group">
                            <div class="d-flex call-btn">
                                <input type="email"
                                    class="form-control py-3 px-4 w-100 border-0 rounded-0 rounded-end rounded-pill"
                                    name="email" value="" placeholder="Enter Your Email Address"
                                    required="Please enter a valid email" />
                                <button type="email" value="Search Now!"
                                    class="btn btn-primary border-0 rounded-pill rounded rounded-start px-5">Subscribe</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Call To Action End -->


    @include('parts.pricingPlan', ['pricing' => $pricing])

    @include('parts.team', ['members' => $members])
    @include('parts.testimonial', ['testimonials' => $testimonials])
@endsection
