@extends('layout.base')
@section('title','Edit tugas | Pegawai')
@section('content')
<a href="/tugas" style="text-decoration: none">
	<h2 style="text-align: center" class="mt-5">Pemrograman Web</h2>
	<h3 style="text-align: center">Edit Tugas Pegawai</h3>
</a>
<br><br>
@foreach ($tugas as $t)
<form action="/tugas/update" method="post">
	{{ csrf_field() }}
	<div class="form-group">
		<input type="hidden" name="id" value="{{ $t->id }}">
	</div>
	<div class="form-group">
		<label>ID Pegawai</label>
	  <input type="int" name="idPegawai" required="" class="form-control" placeholder="Masukan ID Pegawai" value="{{ $t->idPegawai }}">
	</div>
	<div class="form-group">
		<label>Tanggal</label>
		<input type="date" name="tanggal" required="" class="form-control" placeholder="Masukan Tanggal" value="{{ $t->tanggal }}">
	</div>
	<div class="form-group">
		<label>Nama Tugas</label>
		<input type="text" name="namaTugas" required="" class="form-control" placeholder="Masukan Nama" value="{{ $t->namaTugas }}">
	</div>
	<div class="form-group">
		<label>Status</label>
		<select name="status" parsley-trigger="change" required="" placeholder="Pilih Status" autocomplete="off" class="form-control" value="{{ $t->status }}">
			@if ($t->status == "T")
				<option>{{ $t->status}}</option>
			    <option>F</option>
			@elseif ($t->status == "F")
				<option>{{ $t->status}}</option>
				<option>T</option>
			@endif
		</select>
	</div>
	<button type="submit" class="btn btn-primary">Simpan</button>
	<a href="/tugas" class="btn btn-danger">Batal</a>
</form>
@endforeach
@endsection
