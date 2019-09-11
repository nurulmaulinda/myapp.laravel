@extends('themes.index')
@section('content')
<div class="jumbotron">
<div class="row">
    <div class="col-md-7">    
        <h3>Data Buku</h3>
        @foreach($data as $row)
        ISBN : {{ $row->isbn }}
        <br/>Judul Buku : {{ $row->judul }}
        <br/>Tahun Cetak : {{ $row->tahun_cetak }}
        <br/>Stok Buku : {{ $row->stok }}
        <br/>Penerbit : {{ $row->pen }}
        <br/>Pengarang : {{ $row->nama }}
        <br/>Kategori : {{ $row->kat }}
        @endforeach
    </div>
    <div class="col-md-5">
    @if (!empty($row->cover)) 
        <img src="{{asset('img')}}/{{ $row->cover }}" width="60%" />
    @else 
        <img src="{{asset('img')}}/nocover.jpg" width="60%" />   
    @endif     
    </div>    
</div>

</div>
@endsection