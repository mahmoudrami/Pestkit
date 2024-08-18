<div class="mb-3">
    <label >Name</label>
    <input type="text" name="name" placeholder="Name" value="{{ old('name',@$item->name) }}"
     class="form-control @error('name') is-invalid @enderror">
    @error('name')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label >Email</label>
    <input type="email" name="email" placeholder="Email" value="{{ old('email',@$item->email) }}"
     class="form-control @error('email') is-invalid @enderror">
    @error('email')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label >Phone</label>
    <input type="text" name="phone" placeholder="Phone" value="{{ old('phone',@$item->phone) }}"
     class="form-control @error('phone') is-invalid @enderror">
    @error('phone')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label >Description</label>
    <textarea name="description" placeholder="Description" class="form-control @error('description') is-invalid @enderror"
    >{{ old('description', @$item->description) }}</textarea>
    @error('description')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label >Icon</label>
    <input name="icon" placeholder="Icon" class="form-control @error('icon') is-invalid @enderror" value="{{ old('icon', @$item->icon) }}">
    @error('icon')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

{{-- <div class="mb-3">
    <label >Image</label>
    <input type="file" name="image"
     class="form-control @error('image') is-invalid @enderror" onchange="showImg(event)" id="image">
    @error('image')
        <small class="text-danger">{{ $message }}</small>
    @enderror
    <div class="mt-2">
        @if (isset($item))
        <label for="image"><img width="350px" src="{{ $item->icon_path }}" alt="" id="previwe"></label>
        @else
        <label for="image"><img src="" alt="" width="350px" id="previwe"></label>
        @endif

    </div>
</div> --}}
<button class="btn btn-success"> Save</button>
