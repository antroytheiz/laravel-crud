@extends('layout.base')
@section('title','Data | Pegawai')
@section('content')

<a href="{{ route('pegawai') }}" style="text-decoration: none">
  <h2 style="text-align: center" class="mt-5">Pemrograman Web</h2>
  <h3 style="text-align: center">Data Pegawai</h3>
</a>
<br><br>
<div class="row">
  <div class="col-1">
    <a href="/pegawai/tambah" style="text-decoration: none">
      <button type="button" class="btn btn-primary">&#43; Tambah Data</button>
    </a>
  </div>
  <div class="col-7 ml-5">
    <form action="/pegawai/cari" method="GET">
      <div class="input-group mb-3 text-center">
        <input type="text" class="form-control col-md-4" name="cari" placeholder="Masukan data yang dicari" aria-label="Recipient's username" aria-describedby="button-addon2" value="{{ old('cari') }}">
        <div class="input-group-append">
        <button class="btn btn-outline-primary" type="submit" id="button-addon2">Cari</button>
        </div>
      </div>
    </form>
  </div>
</div>
<br>
<table class="table table-hover table-bordered" >
  <thead>
  <tr>
    <th>Nama</th>
    <th>Jabatan</th>
    <th>Umur</th>
    <th>Alamat</th>
    <th>Opsi</th>
  </tr>
  </thead>
  <tbody>
    @foreach($pegawai as $p)
    <tr>
      <td>{{ $p->nama }}</td>
      <td>{{ $p->jabatan }}</td>
      <td>{{ $p->umur }}</td>
      <td>{{ $p->alamat }}</td>
      <td class="text-center">
        <a href="/pegawai/edit/{{ $p->idPegawai }}">Edit</a>
        |
        <a href="/pegawai/hapus/{{ $p->idPegawai }}">Hapus</a>
        |
        <a href="/pegawai/detail/{{ $p->idPegawai }}">Detail</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<br><br>
@endsection