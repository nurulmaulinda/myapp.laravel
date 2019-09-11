@extends('themes.index')
@section('content')
@php
$rs1 = App\Penerbit::all();
$rs2 = App\Pengarang::all();
$rs3 = App\Kategori::all();
@endphp
<h3> Form Buku</h3>
<form method="POST" action="{{route('buku.store')}}" enctype="multipart/form-data">
  {{ csrf_field() }} {{---Penanganan Security-----}}
  <div class="form-group">
    <label>ISBN</label>
    <input type="text" name="isbn" value=""
    class="form-control" placeholder="Input ISBN"/>
   
  </div>
   <div class="form-group">
    <label>Judul</label>
    <input type="text" name="judul" value=""
    class="form-control" placeholder="Input Judul"/>
  </div>
   <div class="form-group">
    <label>Tahun Cetak</label>
    <input type="text" name="tahun_cetak" value=""
    class="form-control" placeholder="Input Tahun Cetak"/>
  </div>
   <div class="form-group">
    <label>Stok</label>
    <input type="text" name="stok" value=""
    class="form-control" placeholder="Input stok"/>
  </div>

<div class="form-group">
    <label>Penerbit</label>
    <select name="penerbit" class="form-control">
      <option value="">-- Pilih Penerbit --</option>
     @foreach ($rs1 as $pen) {
      <option value="{{ $pen['id'] }}"> {{ $pen['nama'] }} </option>
      @endforeach 
    </select>
  </div>

<div class="form-group">
    <label>Pengarang</label><br/>
    <select name="pengarang" class="form-control">
      <option value="">-- Pilih Pengarang --</option>
     @foreach ($rs2 as $peng) {
      <option value="{{ $pen['id'] }}"> {{ $peng['nama'] }} </option>
      @endforeach 
    </select>
  </div>

  <div class="form-group">
    <label>Kategori Buku</label>
     @foreach ($rs3 as $kat)
     <input type="radio" name="kategori" value="{{ $kat['id'] }}" />
     &nbsp;{{ $kat['nama'] }}
      @endforeach 
  </div>

   <div class="custom-file">
    <input type="file" class="custom-file-input" id="validatedCustomFile" name="cover">
    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
  </div>

  <!--  <div class="form-group">
    <label>Cover</label><br>
    <input type="file" value="" class="form-control" name="cover" />
  </div> -->


  <button type="submit" name="proses" value="simpan" class="btn btn-primary">Simpan</button>

  <button type="reset" name="unproses" value="batal" class="btn btn-info">Batal</button>

</form>
@endsection

