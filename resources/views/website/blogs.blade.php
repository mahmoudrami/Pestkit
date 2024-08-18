@extends('website.master')
@section('content')
    @include('parts.about', ['page' => 'Blogs'])
    @include('parts.blog', ['blog' => $blogs])

@endsection
