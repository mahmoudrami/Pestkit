@extends('admins.master')
@section('title', 'home page')
@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Blank Page</h1>
<form action="{{ route('admin.update_settings') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
        <div class="mb-3">
            <label >Email</label>
            <input type="email" name="email" placeholder="Email" value="{{ old('email',@$setting->email) }}"
            class="form-control @error('email') is-invalid @enderror">
            @error('email')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label >Location</label>
            <input type="text" name="location" placeholder="Location" value="{{ old('location',@$setting->location) }}"
             class="form-control @error('location') is-invalid @enderror">
            @error('location')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label >Facebook</label>
            <input type="text" name="facebook" placeholder="Facebook" value="{{ old('facebook',@$setting->facebook) }}"
             class="form-control @error('facebook') is-invalid @enderror">
            @error('facebook')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label >Instagram</label>
            <input type="text" name="instagram" placeholder="Instagram" value="{{ old('instagram',@$setting->instagram) }}"
             class="form-control @error('instagram') is-invalid @enderror">
            @error('instagram')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label >Linkedin</label>
            <input type="text" name="linkedin" placeholder="Linkedin" value="{{ old('linkedin',@$setting->linkedin) }}"
             class="form-control @error('linkedin') is-invalid @enderror">
            @error('linkedin')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>


        <div class="mb-3">
            <label >X</label>
            <input type="text" name="twiter" placeholder="twiter" value="{{ old('twiter',@$setting->twiter) }}"
             class="form-control @error('twiter') is-invalid @enderror">
            @error('twiter')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>


        <div class="mb-3">
            <label >Phone</label>
            <input type="text" name="phone" placeholder="Phone" value="{{ old('phone',@$setting->phone) }}"
             class="form-control @error('phone') is-invalid @enderror">
            @error('phone')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label >Image</label>
            <input type="file" name="logo" id="image"
             class="form-control @error('logo') is-invalid @enderror" onchange="showImg(event)">
            @error('logo')
                <small class="text-danger">{{ $message }}</small>
            @enderror
            <label for="image"><img src="{{ asset('images/'.@$setting->logo) }}" alt="" width="350px" id="previwe"></label>
        </div>
        <button class="btn btn-success"><i class="fas fa-save"></i> Save</button>
</form>
@endsection
