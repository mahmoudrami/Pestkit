@extends('admins.master')
@section('title', 'Services')
@section('content')
    <!-- Page Heading -->
    <div class="d-flex justify-content-between mb-3">
        <h1 class="h3 mb-4 text-gray-800">All Services</h1>
        <a href="{{ route('admin.services.create') }}" class="btn btn-secondary mr-5 h-75 p-2">add new</a>
    </div>
    @if (session('msg'))
            <div class="alert alert-{{ session('type') }} ">
                {{ session('msg') }}
            </div>
            @endif
    <table class="table table-hover table-bordderd ">
        <tr class="table-dark">
            <th>#</th>
            <th>icon</th>
            <th>title</th>
            <th>Count Comment</th>
            <th>Action</th>
        </tr>
        @foreach (@$items as $item)
            <tr>
                <th>{{ @$loop->itraetion }}</th>
                <th><i class="{{ @$item->icon }} fa-3x text-primary"></i></th>
                <th>{{ @$item->name }}</th>
                <th>Count Comment</th>
                <th>
                    <a href="{{ route('admin.services.edit', @$item->id) }}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                    <form action="{{ route('admin.services.destroy', @$item->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('delete')
                        <button type="button" onclick="deletecourse(event)" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                    </form>
                </th>
            </tr>
        @endforeach
    </table>
@endsection

@section('js')
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function deletecourse(e){

        Swal.fire({
            title: "Are you Sure",
            text: "you need delete blog",
            icon: "trash",
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes Delete it',
        }).then((result)=>{
            if(result.isConfirmed){

                e.target.closest('form').submit();

            }
        })
    }

</script>

@endsection
