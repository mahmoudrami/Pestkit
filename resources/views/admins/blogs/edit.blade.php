@extends('admins.master')
@section('title', 'Blog')
@section('content')
<h1 class="h3 mb-4 text-gray-800">Edit Blog</h1>
    <form action="{{ route('admin.blogs.update', @$item->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        @include('admins.blogs._form')
    </form>
@endsection
