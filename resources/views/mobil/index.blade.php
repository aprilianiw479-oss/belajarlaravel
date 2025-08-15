@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Data Mobil</h3>

        <a href="{{  route('mobil.create') }}" class="btn btn-primary my-3">Tambah Mobil</a>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Merek</th>
                    <th>Tipe</th>
                    <th>Warna</th>
                    <th>Aksi</th>   
                </tr>
            </thead>
            <tbody>
                @if ($mobil->isEmpty())
                    <tr>
                        <td colspan="4" class="text-center">Mobil is Empty</td>
                    </tr>
                @endif

                @foreach ($mobil as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->merek }}</td>
                        <td>{{ $item->tipe }}</td>
                        <td>{{ $item->warna }}</td>
                        <td> 
                            <a href="{{ route('mobil.show', $item->id) }}" class="btn btn-sm btn-secondary">Detail</a> 
                            <a href="{{ route('mobil.edit', $item->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <a href="javascript:;" onclick="handleDelete('{{  $item->id }}')" class="btn btn-sm btn-danger">Hapus</a>
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
                title: "Apakah kamu yakin?",
                text: "Data yang dihapus tidak bisa dikembalikan.",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#dc3545",
                cancelButtonColor: "#343a40",
                confirmButtonText: "Ya, Hapus!",
                cancelButtonText: "Batal"
            }).then((result) => {
                if (result.isConfirmed) {
                    var form = document.getElementById('form-delete');
                    form.setAttribute('action', '{{ url("/mobil") }}/' + id);
                    form.submit();
                }
            });
            
        }
    </script>
@endpush