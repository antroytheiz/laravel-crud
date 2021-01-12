@extends('layout.base')
@section('title','Tambah Data | Pegawai')
@section('content')
<a href="/pegawai" style="text-decoration: none">
	<h2 style="text-align: center" class="mt-5">Pemrograman Web</h2>
	<h3 style="text-align: center">Tambah Data Pegawai</h3>
</a>
<br><br>
<form action="/pegawai/store" method="post">
	{{ csrf_field() }}
	<div class="form-group">
		<label>ID Pegawai</label>
	  <input type="text" name="idPegawai" class="form-control" placeholder="ID Pegawai Misalnya (9001)">
	</div>
	<div class="form-group">
		<label>Nama</label>
	  <input type="text" name="nama" class="form-control" placeholder="Masukan Nama">
	</div>
	<div class="form-group">
		<label>Jabatan</label>
		<input type="text" name="jabatan" class="form-control" placeholder="Masukan Jabatan">
	</div>
	<div class="form-group">
		<label>Umur</label>
		<input type="number" name="umur" class="form-control" placeholder="Masukan Umur">
	</div>
	<div class="form-group">
		<label>Alamat</label>
		<textarea name="alamat" class="form-control" rows="3"></textarea>
	</div>
	<button type="submit" class="btn btn-primary">Simpan</button>
	<a href="/pegawai" class="btn btn-danger">Batal</a>
</form>
@endsection