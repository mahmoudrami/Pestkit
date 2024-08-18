<div class="mb-3">
    <label >Name</label>
    <input type="text" name="name" placeholder="Name" value="{{ old('name',@$item->name) }}"
     class="form-control @error('name') is-invalid @enderror">
    @error('name')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label >Perfession</label>
    <input type="text" name="perfession" placeholder="Perfession" value="{{ old('perfession',@$item->perfession) }}"
     class="form-control @error('perfession') is-invalid @enderror">
    @error('perfession')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label >Location</label>
    <input type="text" name="location" placeholder="Location" value="{{ old('location',@$item->location) }}"
     class="form-control @error('location') is-invalid @enderror">
    @error('location')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label >Facebook</label>
    <input type="text" name="facebook" placeholder="Facebook" value="{{ old('facebook',@$item->facebook) }}"
     class="form-control @error('facebook') is-invalid @enderror">
    @error('facebook')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label >Instagram</label>
    <input type="text" name="instagram" placeholder="Instagram" value="{{ old('instagram',@$item->instagram) }}"
     class="form-control @error('instagram') is-invalid @enderror">
    @error('instagram')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label >Linkedin</label>
    <input type="text" name="linkedin" placeholder="Linkedin" value="{{ old('linkedin',@$item->linkedin) }}"
     class="form-control @error('linkedin') is-invalid @enderror">
    @error('linkedin')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label >Twiter</label>
    <input type="text" name="twiter" placeholder="Twiter" value="{{ old('twiter',@$item->twiter) }}"
     class="form-control @error('twiter') is-invalid @enderror">
    @error('twiter')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>



<div class="mb-3">
    <label >Image</label>
    <input type="file" name="image"
     class="form-control @error('image') is-invalid @enderror" onchange="showImg(event)" id="image">
    @error('image')
        <small class="text-danger">{{ $message }}</small>
    @enderror
    <div class="mt-2">
        @if (isset($item))
        <label for="image"><img width="350px" src="{{ $item->image_path }}" alt="" id="previwe"></label>
        @else
        <label for="image"><img src="" alt="" width="350px" id="previwe"></label>
        @endif

    </div>
</div>

<button class="btn btn-success"> Save</button>
