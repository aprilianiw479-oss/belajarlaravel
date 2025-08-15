@extends('layouts.app')

@section('content')
    <div class='container'>
        <h3>Detail Siswa</h3>

        <table class="table table-bordered table-striped">
        <tr>
            <th width="25%">NIS</th>
            <th width="10px">:</th>
            <td>{{ $siswa->nis }}</td>
        </tr>
        <tr>
            <th width="25%">Nama Siswa</th>
            <th width="10px">:</th>
            <td>{{ $siswa->nama }}</td>
        </tr>
        <tr>
            <th width="25%">Umur</th>
            <th width="10px">:</th>
            <td>{{ $siswa->umur }}</td>
        </tr>
        <tr>
            <th width="25%">Jenis Kelamin</th>
            <th width="10px">:</th>
            <td>{{ $siswa->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
        </tr>
        <tr>
            <th width="25%">Tempat, Tanggal Lahir</th>
            <th width="10px">:</th>
            <td>{{ $siswa->tempat_lahir }}, {{ Carbon\Carbon::parse($siswa->tanggal_lahir)->isoFormat('D MMMM Y') }}</td>
        </tr>
        <tr>
            <th width="25%">Alamat</th>
            <th width="10px">:</th>
            <td>{{ $siswa->alamat }}</td>
        </tr>
        <tr>
            <th width="25%">Nomor Telepon</th>
            <th width="10px">:</th>
            <td>{{ $siswa->no_telp }}</td>
        </tr>
         <tr>
            <th width="25%">Dibuat Pada</th>
            <th width="10px">:</th>
            <td>{{ Carbon\Carbon::parse($siswa->created_at)->isoFormat('DD/MM/Y HH:mm') }}</td>
        </tr>
         <tr>
            <th width="25%">Diperbarui pada</th>
            <th width="10px">:</th>
            <td>{{ Carbon\Carbon::parse($siswa->updated_at)->isoFormat('DD/MM/Y HH:mm') }}</td>
        </tr>
        </table>

        <div class="mt-3">
            <a href="{{  route('siswa.index') }}">Kembali</a>
            <a href="{{ route('siswa.edit', $siswa->id) }}">Edit</a>
            Hapus
        </div>
    </div>
@endsection