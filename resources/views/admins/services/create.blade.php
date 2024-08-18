@extends('admins.master')
@section('title', 'Service')
@section('content')
<h1 class="h3 mb-4 text-gray-800">Add Service</h1>
    <form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('admins.services._form')
    </form>
@endsection
