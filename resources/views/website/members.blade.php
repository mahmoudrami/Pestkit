@extends('website.master')
@section('content')
    @include('parts.about', ['page' => 'Team Member'])
    @include('parts.team', ['members' => $members])

@endsection
