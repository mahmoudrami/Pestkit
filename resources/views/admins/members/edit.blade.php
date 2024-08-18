@extends('admins.master')
@section('title', 'Member')
@section('content')
<h1 class="h3 mb-4 text-gray-800">Edit Member</h1>
    <form action="{{ route('admin.members.update', @$item->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        @include('admins.members._form')
    </form>
@endsection
