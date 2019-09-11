@extends('themes.index')
@section('content')
@php
$ar_judul = ['No','Nama','Email','HP','Foto','Action'];
@endphp
<h3>Daftar Pengarang</h3>
<br/>
<a class="btn btn-primary" href="{{ route('pengarang.create') }}" 
   role="button">Tambah Pengarang</a>
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
  @foreach($ar_pengarang as $no => $row)
    <tr>
      <td width="">{{ ++$no }}</td>
      <td width="">{{ $row->nama }}</td>
      <td width="">{{ $row->email }}</td>
      <td width="">{{ $row->hp }}</td>
      <td width="300"><img src="img/{{ $row->foto }}" width="60%" /></td>
      <td>
        <a class="nav-link" 
           href="{{ route('pengarang.show',$row->id)}}">
           <i class="material-icons">visibility</i>
        </a>
        <a class="nav-link" 
           href="{{ route('pengarang.show',$row->id)}}">
           <i class="material-icons">create</i>
        </a>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
@endsection