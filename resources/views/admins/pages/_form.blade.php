<div class="mb-3">
    <label >Title</label>
    <input type="text" name="title" placeholder="Title" value="{{ old('title',@$item->title) }}"
     class="form-control @error('title') is-invalid @enderror">
    @error('title')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="mb-3">
    <label >Content</label>
    <textarea name="content" placeholder="Content" class="form-control @error('content') is-invalid @enderror"
    >{{ old('content', @$item->content) }}</textarea>
    @error('content')
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
