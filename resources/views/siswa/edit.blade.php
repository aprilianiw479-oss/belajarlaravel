@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Edit Siswa</h3>
        <a href="{{  route('siswa.index') }}" class="my-3">Kembali</a>

        <div class="row">
            <div class="col-md-6">
                <div class="card card-body">
                    <form action="{{  route('siswa.update', $siswa->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="nis">NIS</label>
                            <input type="text" name="nis" id="nis" value="{{ $siswa->nis }}" class="form-control" />
                            @error('nis')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" id="nama" value="{{ $siswa->nama }}" class="form-control" />
                            @error('nama')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="umur">Umur</label>
                            <input type="text" name="umur" id="umur" value="{{ $siswa->umur }}" class="form-control" />
                        </div>

                        <div class="form-group mb-3">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" id="alamat" class="form-control">{{ $siswa->alamat }}</textarea>
                            @error('alamat')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <div class="form-check">
                                <input type="radio" class="form-chech-input" name="jenis_kelamin" id="jenis_kelamin_l" value="L" @if ($siswa->jenis_kelamin == 'L') checked @endif />
                                <label for="jenis_kelamin_l" class="form-check-label">Laki-laki</label>
                            </div>

                            <div class="form-check">
                                <input type="radio" class="form-chech-input" name="jenis_kelamin" id="jenis_kelamin_p" value="P" @if ($siswa->jenis_kelamin == 'L') checked @endif />
                                <label for="jenis_kelamin_p" class="form-check-label">Perempuan</label>
                            </div>
                            @error('jenis_kelamin')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="tempat_lahir">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" id="tempat_lahir" value="{{ $siswa->tempat_lahir }}" class="form-control" />
                        </div>

                        <div class="form-group mb-3">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" id="tanggal_lahir" value="{{ $siswa->tanggal_lahir }}" class="form-control" />
                        </div>

                        <div class="form-group mb-3">
                            <label for="no_telp">Nomor Telepon</label>
                            <input type="text" name="no_telp" id="no_telp" value="{{ $siswa->no_telp }}" class="form-control" />
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </form>
                </div>
            </div>
        </div>

        
    </div>
@endsection