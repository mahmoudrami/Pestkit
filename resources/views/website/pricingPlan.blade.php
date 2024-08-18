@extends('website.master')
@section('content')
    @include('parts.about', ['page' => 'Pricing Plan'])
    @include('parts.pricingPlan', ['pricing' => $pricing])

@endsection
