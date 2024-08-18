<div class="mb-3">
    <label >Name</label>
    <input type="text" name="name" placeholder="Name" value="{{ old('name',@$item->name) }}"
     class="form-control @error('name') is-invalid @enderror">
    @error('name')
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
        <label for="image"><img width="350px" src="{{ $item->icon_path }}" alt="" id="previwe"></label>
        @else
        <label for="image"><img src="" alt="" width="350px" id="previwe"></label>
        @endif

    </div>
</div>
<button class="btn btn-success"> Save</button>
