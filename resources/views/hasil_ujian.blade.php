@if ($nilai >= 60)
@php
    $ket = "Lulus";
    @endphp
@else
@php
   $ket = "Gagal";
   @endphp
@endif 
@if ($nilai >=85 and $nilai <=100)
@php
$grade ="A";
@endphp
@endif 
@if ($nilai >=75 and $nilai <=85)
@php
$grade ="B";
@endphp
@endif 
@if ($nilai >=60 and $nilai <=75)
@php
$grade ="C";
@endphp
@endif 
@if ($nilai >=30 and $nilai <=60)
@php
$grade ="D";
@endphp
@endif 
@if ($nilai >=0 and $nilai <=30)
@php
$grade ="E";
@endphp
@endif 

@switch($grade)
@case("A") @php $predikat = "Memuaskan" @endphp @break
@case("B") @php $predikat = "Bagus" @endphp @break
@case("C") @php $predikat = "Cukup" @endphp @break
@case("D") @php $predikat = "Kurang" @endphp @break
@case("E") @php $predikat = "Buruk" @endphp
@endswitch
<h2>Hasil Ujian {{ $nama }} </h2>
<br/> nama siswa : {{$nama }}
<br/> mata pelajaran : {{ $matpel }}
<br/> Nilai : {{ $nilai }}
<br/> Keterangan : {{ $ket }}
<br/> Grade : {{ $grade }}
<br/> Predikat : {{ $predikat }}