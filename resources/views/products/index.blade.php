@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Products</h3>

        <a href="{{ route('products.create') }}" class="btn btn-primary my-3">Add New</a>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Supplier ID</th>
                    <th>Name</th>
                    <th>Images</th>
                    <th>Stock</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($products->isEmpty())
                    <tr>
                        <td colspan="6" class="text-center">Products is Empty</td>
                    </tr>
                @endif

                @foreach ($products as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->supplier_id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>
                            @if($item->images)
                                <img src="{{ asset('storage/images/' . $item->images) }}" alt="{{ $item->name }}" width="80" />
                            @else
                                <span class="text-muted">No Images</span>
                            @endif
                        </td>
                        <td>{{ $item->stock }}</td>

                        <td>
                            <a href="{{ route('products.show', $item->id) }}" class="btn btn-sm btn-secondary">Show</a>
                            <a href="{{ route('products.edit', $item->id) }}" class="btn btn-sm btn-primary">Edit</a>
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
                    form.setAttribute('action', '{{ url("/products") }}/' + id);
                    form.submit();
                }
            });
            
        }
    </script>
@endpush