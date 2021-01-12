@extends('layout.base')
@section('title','Data Tugas | Pegawai')
@section('content')
<a href="{{ route('tugas') }}" style="text-decoration: none">
	<h2 style="text-align: center" class="mt-5">Pemrograman Web</h2>
	<h3 style="text-align: center">Data Tugas Pegawai</h3>
</a>
<br><br>
<form action="/tugas/store" method="post">
	{{ csrf_field() }}
	<div class="form-group">
		<label>ID Pegawai</label>
	  <input type="int" name="idPegawai" required="" class="form-control" placeholder="Masukan ID Pegawai">
	</div>
	<div class="form-group">
		<label>Tanggal</label>
		<input type="date" name="tanggal" required="" class="form-control" placeholder="Masukan Tanggal">
	</div>
	<div class="form-group">
		<label>Nama Tugas</label>
		<input type="text" name="namaTugas" required="" class="form-control" placeholder="Masukan Nama">
	</div>
	<div class="form-group">
		<label>Status</label>
		<select name="status" parsley-trigger="change" required="" placeholder="Pilih Status" autocomplete="off" class="form-control">
			<option>T</option>
			<option>F</option>
		</select>
	</div>
	<button type="submit" class="btn btn-primary">Simpan</button>
	<a href="/tugas" class="btn btn-danger">Batal</a>
</form>
@endsection