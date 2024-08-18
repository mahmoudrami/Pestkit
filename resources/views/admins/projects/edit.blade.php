@extends('admins.master')
@section('title', 'Projcet')
@section('content')
<h1 class="h3 mb-4 text-gray-800">Edit project</h1>
    <form action="{{ route('admin.projects.update', @$item->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        @include('admins.projects._form')
    </form>
@endsection
