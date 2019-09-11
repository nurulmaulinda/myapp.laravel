@extends('themes.index')
@section('content')
@php
$rs1 = App\Penerbit::all();
$rs2 = App\Pengarang::all();
$rs3 = App\Kategori::all();
@endphp
<h3>Form Buku</h3>
@foreach ($data as $datas)
<form method="POST" action="{{ route('buku.update',$datas->id)}}">
{{ csrf_field() }}
{{ method_field('PUT') }}  
  <div class="form-group">
    <label>ISBN</label>
  <input type="text" name="isbn" value="{{ $datas->isbn}}" 
     class="form-control" placeholder="Input ISBN"/>
  </div>
  <div class="form-group">
    <label>Judul</label>
    <input type="text" name="judul" value="{{ $datas->judul }}" 
     class="form-control" placeholder="Input Judul"/>
  </div>
  <div class="form-group">
    <label>Tahun Cetak</label>
    <input type="text" name="tahun_cetak" value="{{ $datas->tahun_cetak }}" 
     class="form-control" placeholder="Input Tahun Cetak"/>
  </div>
  <div class="form-group">
    <label>Stok</label>
    <input type="text" name="stok" value="{{ $datas->stok }}" 
     class="form-control" placeholder="Input Stok"/>
  </div>

  <div class="form-group">
    <label>Penerbit</label>
    <select name="penerbit" class="form-control">
      <option value="">-- Pilih Penerbit --</option>
      @foreach($rs1 as $pen)
        @php  
        $sel = ( $pen->id == $datas->idpenerbit) ? 'selected' : '';
        @endphp
        <option value="{{ $pen->id }}" {{ $sel }}> {{ $pen->nama }} </option>
      @endforeach  
    </select>
  </div>
  
  <div class="form-group">
    <label>Pengarang</label>
    <select name="pengarang" class="form-control">
      <option value="">-- Pilih Pengarang --</option>
      @foreach($rs2 as $peng)
        @php  
        $sel = ( $peng->id == $datas->idpengarang) ? 'selected' : '';
        @endphp
        <option value="{{ $peng['id'] }}" {{ $sel }}> {{ $peng['nama'] }} </option>
      @endforeach  
    </select>
  </div>

  <div class="form-group">
    <label>Kategori Buku</label><br/>
    @foreach($rs3 as $kat)
      @php  
      $cek = ( $kat->id == $datas->kategori_id) ? 'checked' : '';
      @endphp
       <input type="radio" name="kategori" value="{{ $kat->id }}" {{ $cek }}/>
       &nbsp;{{ $kat->nama }}
    @endforeach 
  </div>

  <div class="form-group">
    <label>Cover</label>
    <input type="text" name="cover" value="{{ $datas->cover }}" 
     class="form-control" placeholder="Input Nama File Cover Buku"/>
  </div>  
 
  <button type="submit" name="proses" value="Ubah" 
   class="btn btn-primary">Ubah</button>

  <input type="hidden" name="id" value="{{ $datas->id }}" />
  
  <button type="reset" name="unproses" value="batal" 
   class="btn btn-info">Batal</button>   

</form>
@endforeach
@endsection