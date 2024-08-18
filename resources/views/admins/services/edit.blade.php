@extends('admins.master')
@section('title', 'Service')
@section('content')
<h1 class="h3 mb-4 text-gray-800">Edit Service</h1>
    <form action="{{ route('admin.services.update', @$item->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        @include('admins.services._form')
    </form>
@endsection
