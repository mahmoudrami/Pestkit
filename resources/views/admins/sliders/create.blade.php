@extends('admins.master')
@section('title', 'Slider')
@section('content')
<h1 class="h3 mb-4 text-gray-800">Add Project</h1>
    <form action="{{ route('admin.sliders.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('admins.sliders._form')
    </form>
@endsection
