@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Data Siswa</h3>
        <a href="{{  route('siswa.create') }}" class="btn btn-primary my-3">Tambah Siswa</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIS</th>
                    <th>Nama Siswa</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($siswa as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nis }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->jenis_kelamin == 'L' ? 'Laki-Laki' : 'Perempuan' }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td> 
                            <a href="{{ route('siswa.show', $item->id) }}">Detail</a> 
                            <a href="{{ route('siswa.edit', $item->id) }}">Edit</a>
                            <a href="javascript:;" onclick="handleDelete('{{  $item->id }}')" class="text-danger">Hapus</a>
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
                    form.setAttribute('action', '{{ url("/siswa") }}/' + id);
                    form.submit();
                }
            });
            
        }
    </script>
@endpush