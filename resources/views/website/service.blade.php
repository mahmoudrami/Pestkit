@extends('website.master')
@section('content')
    @include('parts.about', ['page' => 'Service'])
    @include('parts.service', ['services' => $services])
    @include('parts.testimonial',['testimonials' => $testimonials])
@endsection
