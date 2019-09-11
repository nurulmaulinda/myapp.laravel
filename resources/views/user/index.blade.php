@extends('themes.index')
@section('content')

@if(Auth::user()->role == 'Administrator')

@php
$ar_judul = ['No','Nama','Email','Role','Foto','Action'];
@endphp
<h3>Daftar User</h3>
<br/>
<a class="btn btn-primary" href="#" role="button">Tambah User</a>
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
  @foreach($ar_user as $no => $row)
    <tr>
      <td width="">{{ ++$no }}</td>
      <td width="">{{ $row->name }}</td>
      <td width="">{{ $row->email }}</td>
      <td width="">{{ $row->role }}</td>
      <td width="">
      @if (!empty($row->foto)) <img src="img/{{ $row->foto }}" width="60%" />   
      @else <img src="img/nofoto.jpg" width="30%" />   
      @endif 
      </td>
      <td>
        
        <a class="btn btn-primary" href="#" 
           role="button"><i class="material-icons">visibility</i>
        </a>
        <a class="btn btn-warning" href="#" 
           role="button"><i class="material-icons">create</i>
        </a>
        <form action="#" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" 
         onclick="return confirm('Yakin diHapus?')">
         <i class="material-icons">delete</i>
        </button>
        <form>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>

@else
@include('themes.terlarang')
@endif

@endsection