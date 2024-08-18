@extends('admins.master')
@section('title', 'Page')
@section('content')
<h1 class="h3 mb-4 text-gray-800">Add Page</h1>
    <form action="{{ route('admin.pages.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('admins.pages._form')
    </form>
@endsection
