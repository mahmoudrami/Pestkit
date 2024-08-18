@extends('admins.master')
@section('title', 'Member')
@section('content')
<h1 class="h3 mb-4 text-gray-800">Add Project</h1>
    <form action="{{ route('admin.members.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @include('admins.members._form')
    </form>
@endsection
