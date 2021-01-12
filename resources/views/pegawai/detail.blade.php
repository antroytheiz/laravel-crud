@extends('layout.base')
@section('title','Data | Pegawai')
@section('content')

<a href="{{ route ('pegawai') }}" style="text-decoration: none">
  <h2 style="text-align: center" class="mt-5">Pemrograman Web</h2>
  <h3 style="text-align: center">Detail Data Pegawai</h3>
</a>
<br>
<div class="row">
  <div class="col-1">
    <a href="/pegawai/" style="text-decoration: none">
      <button type="button" class="btn btn-warning">&larr; Kembali</button>
    </a>
  </div>
  {{-- <div class="col-7 ml-3">
    <form action="/pegawai/cari" method="GET">
      <div class="input-group mb-3 text-center">
        <input type="text" class="form-control col-md-4" name="cari" placeholder="Masukan data yang dicari" aria-label="Recipient's username" aria-describedby="button-addon2" value="{{ old('cari') }}">
        <div class="input-group-append">
        <button class="btn btn-outline-primary" type="submit" id="button-addon2">Cari</button>
        </div>
      </div>
    </form>
  </div> --}}
</div>
<br>
<h3>Data Pegawai</h3>
<br>
@foreach ($pegawai as $p)
<div class="col-6">
    <ul class="list-group">
        <li class="list-group-item"><b>Nama</b>     : {{ $p->nama }}</li>
        <li class="list-group-item"><b>Jabatan</b>  : {{ $p->jabatan }}</li>
        <li class="list-group-item"><b>Umur</b>     : {{ $p->umur }}</li>
        <li class="list-group-item"><b>Alamat</b>   : {{ $p->alamat }}</li>
    </ul>
</div>
@endforeach
<br>
<h3>Daftar Pendapatan</h3>
<br>
<table class="table table-hover table-bordered" >
    <thead>
    <tr>
        {{-- <th>ID Pegawai</th> --}}
        <th>Bulan</th>
        <th>Tahun</th>
        <th>Gaji</th>
        <th>Tunjangan</th>
    </tr>
    </thead>
    <tbody>
        @foreach($pendapatan as $p)
        <tr>
            {{-- <td>{{ $p->idPegawai }}</td> --}}
            <td>{{ $p->bulan }}</td>
            <td>{{ $p->tahun }}</td>
            <td>Rp.{{ $p->gaji }}</td>
            <td>Rp.{{ $p->tunjangan }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<br>

@endsection