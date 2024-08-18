@extends('admins.master')
@section('title', 'Slider')
@section('content')
<h1 class="h3 mb-4 text-gray-800">Edit Slider</h1>
    <form action="{{ route('admin.sliders.update', @$item->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        @include('admins.sliders._form')
    </form>
@endsection
