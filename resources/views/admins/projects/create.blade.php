@extends('admins.master')
@section('title', 'project')
@section('content')
<h1 class="h3 mb-4 text-gray-800">Add Project</h1>
    <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('admins.projects._form')
    </form>
@endsection
