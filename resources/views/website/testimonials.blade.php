@extends('website.master')
@section('content')
    @include('parts.about', ['page' => 'Testimonials'])
    @include('parts.testimonial', ['testimonial' => $testimonials])

@endsection
