<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
</head>
<body>
    <div class="container">
        <h2>Data Mahasiswa Magang</h2>
                @if (Auth::check() && Auth::user()->level == 'admin')
                <a href="{{ route('pengguna.create') }}" class="btn btn-primary">Tambah</a>
                @endif
                <a href="{{ route('download_pdf') }}" class="btn btn-danger">PDF</a>
                <a href="{{ route('pengguna_excel') }}" class="btn btn-success">Excel</a>
                <table class="table table-bordered data-table">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Telpon</th>
                            <th>Tanggal Lahir</th>
                            <th>Asal Sekolah</th>
                            <th width="100px">Action</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
    </div>
</body>
<script type="text/javascript">
                            $(function (){
                                var table = $('.yajra-datatable').DataTable({
                                    processing: true,
                                    serverSide: true,
                                    ajax: "{{ route('crud2.index') }}",
                                    // columns: [
                                    //     {data: 'nama', name: 'Nama'},
                                    //     {data: 'alamat', name: 'Alamat'},
                                    //     {data: 'telpon', name: 'Telpon'},
                                    //     {data: 'tgl_lahir', name: 'Tanggal Lahir'},
                                    //     {data: 'asal_sekolah', name: 'Asal Sekolah'},
                                    //     {data: 'action', name: 'action', orderable: true, searchable: true},
                                    // ]
                                });
                            });  
    </script>
</html>