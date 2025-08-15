@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Suppliers</h3>

        <a href="{{ route('suppliers.create') }}" class="btn btn-sm btn-primary my-3">Add New</a>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($suppliers as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->address }}</td>
                        <td>
                            <a href="{{ route('suppliers.show', $item->id) }}" class="btn btn-sm btn-secondary">Show</a>
                            <a href="{{ route('suppliers.edit', $item->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <a href="javascript:;" onclick="handleDelete('{{ $item->id }}')" class="btn btn-sm btn-danger">Delete</a>
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
                text: "Delete data cannot be recovered.",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#dc3545",
                cancelButtonColor: "#343a40",
                confirmButtonText: "Yes, Delete!",
                cancelButtonText: "Cancel"
            }).then((result) => {
            if (result.isConfirmed) {
                var form = document.getElementById('form-delete');
                form.setAttribute('action', '{{ url("/suppliers") }}/' + id);
                form.submit();
            }
            });
        }
    </script>
@endpush