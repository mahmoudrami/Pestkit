<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>@yield('title', env('APP_NAME'))</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">


        <!-- Libraries Stylesheet -->
        <link href="{{ asset('website/lib/animate/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('website/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{ asset('website/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset('website/css/style.css') }}" rel="stylesheet">
    </head>

    <body>
        <!-- Spinner Start -->
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->

        <!-- Topbar Start -->
        <div class="container-fluid topbar-top bg-primary">
            <div class="container">

                <div class="d-flex justify-content-between topbar py-2">
                    <div class="d-flex align-items-center flex-shrink-0 topbar-info">
                        <a href="#" class="me-4 text-secondary"><i class="fas fa-map-marker-alt me-2 text-dark"></i>{{ $setting->location }}</a>
                        <a href="#" class="me-4 text-secondary"><i class="fas fa-phone-alt me-2 text-dark"></i>{{ $setting->phone }}</a>
                        <a href="#" class="text-secondary"><i class="fas fa-envelope me-2 text-dark"></i>{{ $setting->email }}</a>
                    </div>

                    <div class="d-flex align-items-center justify-content-center topbar-icon">
                        <a href="{{ $setting->facebook }}" class="me-4"><i class="fab fa-facebook-f text-dark"></i></a>
                        <a href="{{ $setting->twiter }}" class="me-4"><i class="fab fa-twitter text-dark"></i></a>
                        <a href="{{ $setting->instagram }}" class="me-4"><i class="fab fa-instagram text-dark"></i></a>
                        <a href="{{ $setting->linkedin }}" class=""><i class="fab fa-linkedin-in text-dark"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->


        <!-- Navbar Start -->
        <div class="container-fluid bg-dark">
            <div class="container">
                <nav class="navbar navbar-dark navbar-expand-lg py-lg-0">
                    <a href="{{ route('homePage') }}" class="navbar-brand">
                        <h1 class="text-primary mb-0 display-5">Pest<span class="text-white">Kit</span><i class="fa fa-spider text-primary ms-2"></i></h1>
                    </a>
                    <button class="navbar-toggler bg-primary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars text-dark"></span>
                    </button>
                    <div class="collapse navbar-collapse me-n3" id="navbarCollapse">
                        <div class="navbar-nav ms-auto">
                            <a href="{{ route('homePage') }}" class="nav-item nav-link {{ Route::currentRouteName() == 'homePage'? 'active':'' }}">Home</a>
                            <a href="{{ route('about') }}" class="nav-item nav-link {{ Route::currentRouteName() == 'about'? 'active':'' }}">About</a>
                            <a href="{{ route('Services') }}" class="nav-item nav-link {{ Route::currentRouteName() == 'Services'? 'active':'' }}">Services</a>
                            <a href="{{ route('Projects') }}" class="nav-item nav-link {{ Route::currentRouteName() == 'Projects'? 'active':'' }}">Projects</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle {{ Str::contains(Route::currentRouteName(), 'page')?'active':'' }}" data-bs-toggle="dropdown">Pages</a>

                                <div class="dropdown-menu m-0 bg-primary">
                                    <a href="{{ route('page.Pricing') }}" class="dropdown-item {{ Str::contains(Route::currentRouteName(), 'Pricing')?'active':'' }}">Pricing Plan</a>
                                    <a href="{{ route('page.blogs') }}" class="dropdown-item {{ Str::contains(Route::currentRouteName(), 'blogs')?'active':'' }}">Blog Post</a>
                                    <a href="{{ route('page.members') }}" class="dropdown-item {{ Str::contains(Route::currentRouteName(), 'members')?'active':'' }}">Team Members</a>
                                    <a href="{{ route('page.testimonials') }}" class="dropdown-item {{ Str::contains(Route::currentRouteName(), 'testimonials')?'active':'' }}">Testimonial</a>
                                </div>
                            </div>
                            <a href="{{ route('Contact') }}" class="nav-item nav-link {{ Route::currentRouteName() == 'Contact'? 'active':'' }}">Contact</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->


        @yield('content')

        <!-- Footer Start -->
        <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay=".3s">
            <div class="container py-5">
                <div class="row g-4 footer-inner">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <h4 class="text-white fw-bold mb-4">About PestKit.</h4>
                            <p>Nostrud exertation ullamco labor nisi aliquip ex ea commodo consequat duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</p>
                            <p class="mb-0"><a class="" href="#">PestKit </a> &copy; 2023 All Right Reserved.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <h4 class="text-white fw-bold mb-4">Usefull Link</h4>
                            <div class="d-flex flex-column align-items-start">
                                <a class="btn btn-link ps-0" href="{{ route('about') }}"><i class="fa fa-check me-2"></i>About Us</a>
                                <a class="btn btn-link ps-0" href="{{ route('Contact') }}"><i class="fa fa-check me-2"></i>Contact Us</a>
                                <a class="btn btn-link ps-0" href="{{ route('Services') }}"><i class="fa fa-check me-2"></i>Our Services</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">

                            <h4 class="text-white fw-bold mb-4">Services Link</h4>

                            <div class="d-flex flex-column align-items-start">

                                @foreach (App\Models\Service::take(4)->get() as $one)
                                <a class="btn btn-link ps-0" href="{{ route('Services') }}"><i class="fa fa-check me-2"></i>{{ $one->name }}</a>
                                @endforeach
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <h4 class="text-white fw-bold mb-4">Contact Us</h4>
                            <a href="{{ route('Contact') }}" class="btn btn-link w-100 text-start ps-0 pb-3 border-bottom rounded-0"><i class="fa fa-map-marker-alt me-3"></i>{{ $setting->location }}</a>
                            <a href="{{ route('Contact') }}" class="btn btn-link w-100 text-start ps-0 py-3 border-bottom rounded-0"><i class="fa fa-phone-alt me-3"></i>{{ $setting->phone }}</a>
                            <a href="{{ route('Contact') }}" class="btn btn-link w-100 text-start ps-0 py-3 border-bottom rounded-0"><i class="fa fa-envelope me-3"></i>{{ $setting->email }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->



        <!-- Copyright Start -->
        <div class="container-fluid copyright bg-dark py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 text-center text-md-start mb-3 mb-md-0">
                        <a href="{{ route('homePage') }}" class="text-primary mb-0 display-6">Pest<span class="text-white">Kit</span><i class="fa fa-spider text-primary ms-2"></i></a>
                    </div>
                    <div class="col-md-4 copyright-btn text-center text-md-start mb-3 mb-md-0 flex-shrink-0">
                        <a class="btn btn-primary rounded-circle me-3 copyright-icon" href="{{ $setting->twiter }}"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-primary rounded-circle me-3 copyright-icon" href="{{ $setting->facebook }}"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-primary rounded-circle me-3 copyright-icon" href="{{ $setting->instagram }}"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-primary rounded-circle me-3 copyright-icon" href="{{ $setting->linkedin }}"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-md-4 my-auto text-center text-md-end text-white">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a><br>Distributed By <a class="border-bottom" href="https://themewagon.com">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->


        <!-- Back to Top -->
        <a href="/" class="btn btn-primary rounded-circle border-3 back-to-top"><i class="fa fa-arrow-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('website/lib/wow/wow.min.js') }}"></script>
        <script src="{{ asset('website/lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('website/lib/waypoints/waypoints.min.js') }}"></script>
        <script src="{{ asset('website/lib/owlcarousel/owl.carousel.min.js') }}"></script>

        <!-- Template Javascript -->
        <script src="{{ asset('website/js/main.js') }}"></script>
    </body>

</html>
