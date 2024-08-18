<div class="mb-3">
    <label >Name</label>
    <select name="user_id" class="custom-select @error('user_id') is-invalid @enderror">
        <option value="">Choose</option>
        @foreach (@$users as $user)
            <option value="{{ @$user->id }}">{{ @$user->name }}</option>
        @endforeach
    </select>
    @error('name')
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
    <label >Rate</label>
    <input type="number" name="rate" placeholder="Rate" value="{{ old('rate',@$item->rate) }}"
     class="form-control @error('rate') is-invalid @enderror">
    @error('rate')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>


<button class="btn btn-success"> Save</button>
