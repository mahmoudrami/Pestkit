@extends('admins.master')
@section('title', 'Page')
@section('content')
<h1 class="h3 mb-4 text-gray-800">Edit Page</h1>
    <form action="{{ route('admin.pages.update', @$item->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        @include('admins.pages._form')
    </form>
@endsection
