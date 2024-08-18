@extends('admins.master')
@section('title', 'Pricing Plan')
@section('content')
<h1 class="h3 mb-4 text-gray-800">Add Pricing Plan</h1>
    <form action="{{ route('admin.pricingPlan.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="mb-3">
                    <label >Name</label>
                    <input type="text" name="name" placeholder="Name" value="{{ old('name') }}"
                     class="form-control @error('name') is-invalid @enderror">
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="mb-3">
                    <label >Price</label>
                    <input type="text" name="price" placeholder="Price" value="{{ old('price') }}"
                     class="form-control @error('price') is-invalid @enderror">
                    @error('price')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="mb-3">
                    <label >Title</label>
                    <input type="text" name="title" placeholder="Title" value="{{ old('title') }}"
                     class="form-control @error('title') is-invalid @enderror">
                    @error('title')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-between mb-3">
            <div class="w-50 mx-3">
                <button type="button" onclick="addFeatures()" class="btn btn-info"> add</button>
            </div>
            <div style="width: 49%">
                <button type="button" onclick="addDisadvantages()" class="btn btn-info"> add</button>
            </div>
        </div>

        <div class="d-flex justify-content-between mb-3 wrap">
            <div class="w-50 mx-3" id="features">
                {{-- {{  count(@old('features',[])) }} --}}
                <div class="mb-3" id="features">
                    <label >Features</label>
                    <input type="text" name="features[]" placeholder="Features"
                        class="form-control @error('features') is-invalid @enderror">
                    @error('features')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>


            <div class="w-50 mx-3" id="disadvantages">
                <div class="mb-3">
                    <label >Disadvantages</label>
                    <input type="text" name="disadvantages[]" placeholder="Disadvantages"
                        class="form-control @error('disadvantages') is-invalid @enderror">
                    @error('disadvantages')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

        </div>

        <button class="btn btn-success"> Save</button>

    </form>
@endsection
@section('js')

<script>
        function addDisadvantages(){
            var x = document.getElementById("disadvantages");
            let html = '<div class="mb-3"><input name="disadvantages[]" class="form-control" placeholder="Disadvantages"></div>'
            $('#disadvantages').append(html);
        }

        function addFeatures(){
            var x = document.getElementById("features");
            let html = '<div class="mb-3"><input name="features[]" class="form-control" placeholder="Features"></div>'
            $('#features').append(html);
        }
</script>


@endsection
