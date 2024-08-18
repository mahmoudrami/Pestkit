@extends('website.master')

@section('content')
@include('parts.about',['page' => '404Error'])
            <!-- 404 Start -->
            <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.3s">
                <div class="container text-center py-5">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                            <h1 class="display-1">404</h1>
                            <h1 class="mb-4">Page Not Found</h1>
                            <p class="mb-4">We’re sorry, the page you have looked for does not exist in our website! Maybe go to our home page or try to use a search?</p>
                            <a class="btn btn-primary rounded-pill py-3 px-5" href="{{ route('homePage') }}">Go Home</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 404 End -->


@endsection
