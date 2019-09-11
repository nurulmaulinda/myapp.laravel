<html>
<head>
	<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
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
		<h5>Membuat Laporan Buku Dengan DOMPDF Laravel</h4>
		<h6><a target="_blank" href="https://www.malasngoding.com/membuat-laporan-…n-dompdf-laravel/">www.malasngoding.com</a></h5>
	</center>
 
	<table class='table' border="1" cellpadding="10" cellpadding="0" bgcolor="pink">
		<thead>
			<tr>
				<th>No</th>
				<th>ISBN</th>
				<th>Judul</th>
				<th>Tahun Cetak</th>
				<th>Stok</th>

			</tr>
		</thead>
		<tbody>
			@php $no=1 @endphp
			@foreach($buku as $b)
			@php
			$warna = ($no % 2 == 1) ? 'khaki' : 'beige';
			@endphp
			<tr bgcolor="{{ $warna }}">
				<td width="">{{ ++$no }}</td>
      			<td width="">{{ $b->isbn }}</td>
    			<td width="">{{ $b->judul }}</td>
      			<td width="">{{ $b->tahun_cetak }}</td>
       			<td width="">{{ $b->stok}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>