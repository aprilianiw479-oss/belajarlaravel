<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use App\Models\Siswa;
use Illuminate\Http\Request;


class SiswaController extends Controller
{
    public function index() 
    {
        $siswa = Siswa::all();
        return view('siswa.index', compact('siswa'));
    }
    public function create()
    {
        return view('siswa.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required|unique:siswa,nis',
            'nama' => 'required|min:3|max:64',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
        ], [
            'nis.required' => 'NIS harus diisi',
            'nis.unique' => 'NIS sudah ada, silahkan ganti NIS',
            'nama.required' => 'Nama harus diisi',
            'nama.min' => 'Nama minimal 3 karakter',
            'nama.max' => 'Nama maksimal 64 karakter',
            'jenis_kelamin.required' => 'Jenis Kelamin harus diisi',
            'alamat.required' => 'Alamat harus diisi',
        ]);
        $siswa = Siswa::create($request->all());
        return redirect()->route('siswa.index');
    }
    public function show($id)
    {
        $siswa = Siswa::find($id);
        return view('siswa.show', compact('siswa'));
    }

    public function edit($id)
    {
        $siswa = Siswa::find($id);
        return view('siswa.edit', compact('siswa'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nis' => 'required|unique:siswa,nis,' . $id,
            'nama' => 'required|min:3|max:64',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
        ], [
            'nis.required' => 'NIS harus diisi',
            'nis.unique' => 'NIS sudah ada, silahkan ganti NIS',
            'nama.required' => 'Nama harus diisi',
            'nama.min' => 'Nama minimal 3 karakter',
            'nama.max' => 'Nama maksimal 64 karakter',
            'jenis_kelamin.required' => 'Jenis Kelamin harus diisi',
            'alamat.required' => 'Alamat harus diisi',
        ]);

        $siswa = Siswa::find($id);
        $siswa->update($request->all());
        return redirect()->route('siswa.index');
    }

    public function destroy($id)
    {
        $siswa = Siswa::find($id)->delete();
        return redirect()->back();
    }
}
