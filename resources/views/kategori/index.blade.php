@extends('themes.index')
@section('content')
@php
$ar_judul = ['No','Nama','Action'];
@endphp
<h3>Daftar Kategori</h3>
<br/>
<a class="btn btn-primary" href="{{ route('kategori.create') }}" 
   role="button">Tambah Kategori</a>
<br/><br/>   
<table class="table table-striped">
  <thead>
    <tr>
    @foreach($ar_judul as $jdl)
      <th scope="col">{{ $jdl }}</th>
    @endforeach
    </tr>
  </thead>
  <tbody>
  @foreach($ar_kategori as $no => $row)
    <tr>
      <td width="">{{ ++$no }}</td>
      <td width="">{{ $row->nama }}</td>

        <td>
        <a class="nav-link" 
           href="{{ route('kategori.show',$row->id)}}">
           <i class="material-icons">visibility</i>
        </a>
        <a class="nav-link" 
           href="{{ route('kategori.show',$row->id)}}">
           <i class="material-icons">create</i>
        </a>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
@endsection