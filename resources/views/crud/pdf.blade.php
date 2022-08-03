<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Laporan Data Mahasiswa Magang</h5>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Telpon</th>
                <th>Tanggal Lahir</th>
				<th>Asal Sekolah</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($pengguna as $p)
			<tr>
				<td>{{ $i++ }}</td>
				<td>{{$p->nama}}</td>
				<td>{{$p->alamat}}</td>
				<td>{{$p->telpon}}</td>
                <td>{{$p->tgl_lahir}}</td>
				<td>{{$p->asal_sekolah}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>