@extends('themes.index')
@section('content')
@php
$ar_judul = ['No','Nama','Alamat','Email','Website','Telp','Cp','Action'];
@endphp
<h3>Daftar Penerbit</h3>
<br/>
<a class="btn btn-primary" href="{{ route('penerbit.create') }}" 
   role="button">Tambah Penerbit</a>
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
  @foreach($ar_penerbit as $no => $row)
    <tr>
      <td width="">{{ ++$no }}</td>
      <td width="">{{ $row->nama }}</td>
       <td width="">{{ $row->alamat }}</td>
      <td width="">{{ $row->email }}</td>
      <td width="">{{ $row->website }}</td>
       <td width="">{{ $row->telp }}</td>
        <td width="">{{ $row->cp}}</td>
        <td>
        <a class="nav-link" 
           href="{{ route('penerbit.show',$row->id)}}">
           <i class="material-icons">visibility</i>
        </a>
        <a class="nav-link" 
           href="{{ route('penerbit.show',$row->id)}}">
           <i class="material-icons">create</i>
        </a>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
@endsection