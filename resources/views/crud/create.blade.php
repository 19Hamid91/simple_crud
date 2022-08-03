@extends('layout.master')

@section('content')
<div class="container">
<form action="{{ route('pengguna.store') }}" method="POST">
@csrf
    <div class="form-group p-3">
        <label for="nama">Nama : </label>
        <input type="text" name="nama" class="form-control">
    </div>
    <div class="form-group p-3">
        <label for="alamat">Alamat : </label>
        <input type="text" name="alamat" class="form-control">
    </div>
    <div class="form-group p-3">
        <label for="telpon">Telpon : </label>
        <input type="text" name="telpon" class="form-control">
    </div>
    <div class="form-group p-3">
        <label for="email">Tanggal Lahir : </label>
        <input type="date" name="tgl_lahir" class="form-control">
    </div>
    <div class="form-group p-3">
        <label for="password">Asal Sekolah : </label>
        <input type="text" name="asal_sekolah" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="{{ URL::previous() }}" class="btn btn-danger">Kembali</a>
</form>
</div>    


@endsection