@extends('themes.index')
@section('content')
@php
$ar_judul = ['No','ISBN','Judul','Tahun Cetak','Stok','Pengarang','Penerbit','Kategori','Cover','Action'];
@endphp
<h3>Daftar Buku</h3>
<br/>
<a class="btn btn-primary" href="{{ route('buku.create') }}" 
   role="button">Tambah Buku</a>
   <a class="btn btn-primary" href="{{ url('pdfinbuku') }}" 
   role="button">Cetak Buku</a>
<br/><br/>   
<table class="table table-striped">
  <thead>
    <tr>
    @foreach($ar_judul as $jdl)
      <th scope="col" align="center">{{ $jdl }}</th>
    @endforeach
    </tr>
  </thead>
  <tbody>
  @foreach($ar_buku as $no => $row)
    <tr>
      <td width="">{{ ++$no }}</td>
      <td width="">{{ $row->isbn }}</td>
      <td width="">{{ $row->judul }}</td>
      <td width="">{{ $row->tahun_cetak }}</td>
       <td width="">{{ $row->stok}}</td>
      <td width="">{{ $row->nama}}</td>
      <td width="">{{ $row->pen}}</td>
      <td width="">{{ $row->kat }}</td>
      <td width="">
        @if (!empty($row->cover))
      <img src="img/{{ $row->cover}}" width="30%" />
        @else
        <img src="img/noconer.jpg" width="30%" />
        @endif
      </td>
      <td>
        <a class="nav-link" 
           href="{{ route('buku.show',$row->id)}}">
           <i class="material-icons">visibility</i>
        </a>
        <a class="nav-link" 
           href="{{ route('buku.edit',$row->id)}}">
           <i class="material-icons">create</i>
        </a>

        <form action="{{ route('buku.destroy',$row->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-primary" onclick="return confirm('Yakin diHapus?')"><i class="material-icons">delete</i></button>
        </form>

      </td>
    </tr>
  @endforeach
  </tbody>
</table>
@endsection