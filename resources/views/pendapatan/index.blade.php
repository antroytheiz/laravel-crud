@extends('layout.base')
@section('title','Data | Pendapatan Pegawai ')
@section('content')
<a href="{{ route('pendapatan') }}" style="text-decoration: none">
    <h2 style="text-align: center" class="mt-5">Pemrograman Web</h2>
    <h3 style="text-align: center">Data Pendapatan Pegawai</h3>
</a>
<br><br>
<div class="row">
    <div class="col-1">
      <a href="/pendapatan/tambah" style="text-decoration: none">
        <button type="button" class="btn btn-primary">&#43; Tambah Data</button>
      </a>
    </div>
    <div class="col-7 ml-5">
      <form action="/pendapatan/cari" method="GET">
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
        <th>Bulan</th>
        <th>Tahun</th>
        <th>Gaji</th>
        <th>Tunjangan</th>
        <th>Aksi</th>
    </tr>
    </thead>
    <tbody>
        @foreach($pendapatan as $p)
        <tr>
            {{-- <td>{{ $p->id }}</td> --}}
            <td>{{ $p->idPegawai }}</td>
            <td>{{ $p->bulan }}</td>
            <td>{{ $p->tahun }}</td>
            <td>Rp.{{ $p->gaji }}</td>
            <td>Rp.{{ $p->tunjangan }}</td>
            <td>
                <a href="/pendapatan/edit/{{ $p->idPegawai }}">Edit</a>
                |
                <a href="/pendapatan/hapus/{{ $p->idPegawai }}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<br><br>
<div class="text-center">
    Halaman : {{ $pendapatan->currentPage() }} <br/>
    Jumlah Data : {{ $pendapatan->total() }} <br/>
    Data Per Halaman : {{ $pendapatan->perPage() }} <br/><br>
</div>
<div class="pagination justify-content-center">
    {{ $pendapatan->links() }}
</div>
@endsection
