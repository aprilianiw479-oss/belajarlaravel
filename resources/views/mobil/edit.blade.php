@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Edit Mobil</h3>
        <a href="{{  route('mobil.index') }}" class="my-3">Kembali</a>

        <div class="row">
            <div class="col-md-6">
                <div class="card card-body">
                    <form action="{{  route('mobil.update', $mobil->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="merek">Merek</label>
                            <input type="text" name="merek" id="merek" value="{{ $mobil->merek }}" class="form-control" />
                            @error('merek')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="tipe">Tipe</label>
                            <input type="text" name="tipe" id="tipe" value="{{ $mobil->tipe }}" class="form-control" />
                            @error('tipe')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="warna">Warna</label>
                            <input type="text" name="warna" id="warna" value="{{ $mobil->warna }}" class="form-control" />
                            @error('warna')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                         <div class="form-group mb-3">
                            <label for="jumlah_roda">Jumlah Roda</label>
                            <input type="text" name="jumlah_roda" id="jumlah_roda" value="{{ $mobil->jumlah_roda }}" class="form-control" />
                            @error('jumlah_roda')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="nomor_mesin">Nomor Mesin</label>
                            <input type="text" name="nomor_mesin" id="nomor_mesin" value="{{ $mobil->nomor_mesin }}" class="form-control" />
                            @error('nomor_mesin')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="gambar">Gambar</label>
                            <input type="text" name="gambar" id="gambar" value="{{ $mobil->gambar }}" class="form-control" />
                            @error('gambar')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
@endsection