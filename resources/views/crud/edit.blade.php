@extends('layout.master')

@section('content')
<div class="container">
<form action="{{ route('pengguna.update', $pengguna->id) }}" method="POST">
@csrf
    <div class="form-group p-3">
        <label for="nama">Nama : </label>
        <input type="text" name="nama" class="form-control" value="{{ $pengguna->nama }}">
    </div>
    <div class="form-group p-3">
        <label for="alamat">Alamat : </label>
        <input type="text" name="alamat" class="form-control" value="{{ $pengguna->alamat }}">
    </div>
    <div class="form-group p-3">
        <label for="telpon">Telpon : </label>
        <input type="text" name="telpon" class="form-control" value="{{ $pengguna->telpon }}">
    </div>
    <div class="form-group p-3">
        <label for="email">Tanggal Lahir : </label>
        <input type="date" name="tgl_lahir" class="form-control" value="{{ $pengguna->tgl_lahir }}">
    </div>
    <div class="form-group p-3">
        <label for="password">Asal Sekolah : </label>
        <input type="text" name="asal_sekolah" class="form-control" value="{{ $pengguna->asal_sekolah }}">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{ URL::previous() }}" class="btn btn-danger">Kembali</a>
</form>
</div>    
@endsection