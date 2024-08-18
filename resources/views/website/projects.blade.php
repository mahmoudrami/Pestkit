@extends('website.master')
@section('content')
    @include('parts.about', ['page' => 'Projects'])
    @include('parts.projects', ['projects' => $projects])

@endsection
