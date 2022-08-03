@extends('layout.master')

@section('content')
    <div class="container">
        <h2>Data User</h2>
                <table class="table table-bordered ">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Level</th>
                            <th>Created At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($user as $u)
                        <tr>
                            <td>{{ $u->id }}</td>
                            <td>{{ $u->name }}</td>
                            <td>{{ $u->email }}</td>
                            <td>{{ $u->level }}</td>
                            <td>{{ $u->created_at }}</td>
                            <td>
                                <form action="{{ route('user.delete', $u->id) }}" method="POST">
                                    @csrf
                                    <button class="btn btn-danger" onclick="return confirm('Anda Yakin?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>
@endsection