@extends('layout.master')

@section('content')
    <div class="container">
        <h2>Data Mahasiswa Magang</h2>
                @if (Auth::check() && Auth::user()->level == 'admin')
                <a href="{{ route('pengguna.create') }}" class="btn btn-primary">Tambah</a>
                @endif
                <a href="{{ route('download_pdf') }}" class="btn btn-danger">PDF</a>
                <a href="{{ route('pengguna_excel') }}" class="btn btn-success">Excel</a>
                <table class="table table-bordered ">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Telpon</th>
                            <th>Tanggal Lahir</th>
                            <th>Asal Sekolah</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($penggunas as $p)
                        <tr>
                            <td>{{ $p->id }}</td>
                            <td>{{ $p->nama }}</td>
                            <td>{{ $p->alamat }}</td>
                            <td>{{ $p->telpon }}</td>
                            <td>{{ $p->tgl_lahir }}</td>
                            <td>{{ $p->asal_sekolah }}</td>
                            @if (Auth::check() && Auth::user()->level == 'admin')
                            <td>
                                <a href="{{ route('pengguna.edit',  $p->id) }}" class="btn btn-warning">Edit</a>
                            </td>
                            <td>
                                <form action="{{ route('pengguna.delete', $p->id) }}" method="POST">
                                    @csrf
                                    <button class="btn btn-danger" onclick="return confirm('Anda Yakin?')">Hapus</button>
                                </form>
                            </td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>
@endsection