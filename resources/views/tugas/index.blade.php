@extends('layout.base')
@section('title','Tugas | Pegawai')
@section('content')

<a href="{{ route('tugas') }}" style="text-decoration: none">
  <h2 style="text-align: center" class="mt-5">Pemrograman Web</h2>
  <h3 style="text-align: center">Data Tugas Pegawai</h3>
</a>
<br><br>
<div class="row">
  <div class="col-1">
    <a href="/tugas/tambah" style="text-decoration: none">
      <button type="button" class="btn btn-primary">&#43; Tambah Data</button>
    </a>
  </div>
  <div class="col-7 ml-5">
    <form action="/tugas/cari" method="GET">
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
    {{-- <th>ID</th> --}}
    <th>ID Pegawai</th>
    <th>Tanggal</th>
    <th>Nama Tugas</th>
    <th>Status</th>
    <th>Aksi</th>
  </tr>
  </thead>
  <tbody>
    @foreach($tugas as $t)
    <tr>
      {{-- <td>{{ $t->id }}</td> --}}
      <td>{{ $t->idPegawai }}</td>
      <td>{{ $t->tanggal }}</td>
      <td>{{ $t->namaTugas }}</td>
      <td>{{ $t->status }}</td>
      <td>
        <a href="/tugas/edit/{{ $t->id }}">Edit</a>
        |
        <a href="/tugas/hapus/{{ $t->id }}">Hapus</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<br><br>
<div class="text-center">
  Halaman : {{ $tugas->currentPage() }} <br/>
  Jumlah Data : {{ $tugas->total() }} <br/>
  Data Per Halaman : {{ $tugas->perPage() }} <br/><br>
</div>
<div class="pagination justify-content-center">
  {{ $tugas->links() }}
</div>
@endsection