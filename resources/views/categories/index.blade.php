@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Categories</h3>

        <a href="{{ route('category.create') }}" class="btn btn-primary my-3">Add New</a>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if($categories->isEmpty())
                    <tr>
                        <td colspan="3" class="text-center text-muted">Categories is empty.</td>
                    </tr> 
                @endif

                @foreach ($categories as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->name}}</td>
                        <td>
                            <a href="{{ route('category.show', $item->id) }}">Show</a>
                            <a href="{{ route('category.edit', $item->id) }}">Edit</a>
                            <a href="javascript:;" onclick="handleDelete('{{ $item->id }}')" class="text-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <form action="" id="form-delete" method="POST">
        @csrf
        @method('DELETE')
    </form>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
        function handleDelete(id) {
            Swal.fire({
                title: "Are you sure?",
                text: "Deleted data cannot be recovered.",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#dc3545",
                cancelButtonColor: "#343a40",
                confirmButtonText: "Yes, Delete!",
                cancelButtonText: "Cancel"
            }).then((result) => {
                if (result.isConfirmed) {
                    var form = document.getElementById('form-delete');
                    form.setAttribute('action', '{{ url("/category") }}/' + id);
                    form.submit();
                }
            });
            
        }
    </script>
@endpush