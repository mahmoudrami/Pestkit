@extends('admins.master')
@section('title', 'Blog')
@section('content')
<h1 class="h3 mb-4 text-gray-800">Add Blog</h1>
    <form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('admins.blogs._form')
    </form>
@endsection
