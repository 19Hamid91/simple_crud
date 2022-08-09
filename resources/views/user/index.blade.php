@extends('layout.master')

@section('content')
    @if(Session::has('fail'))
        <div class="alert alert-danger">
            {{Session::get('fail')}}
        </div>
    @endif
    <div class="container">
        <h2>Data User</h2>
                <table id="tableUser" class="display">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Level</th>
                            <th>Verified At</th>
                            <th class="no-sort"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($user as $u)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $u->name }}</td>
                            <td>{{ $u->email }}</td>
                            <td>{{ $u->level }}</td>
                            <td>{{ $u->email_verified_at }}</td>
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
@push('js')    
<script>
    //load datatable
    $(document).ready( function () {
        $('#tableUser').DataTable();
            } );
</script>
@endpush