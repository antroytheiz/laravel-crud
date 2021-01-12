@extends('layout.base')
@section('title','Edit Data | Pegawai')
@section('content')
<a href="/pegawai" style="text-decoration: none">
	<h2 style="text-align: center" class="mt-3">Pemrograman Web</h2>
	<h3 style="text-align: center">Edit Data Pegawai</h3>
</a>
<br><br>
	@foreach ($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<div class="form-group">
			<label>ID Pegawai</label>
			<select name="idPegawai" required class="form-control">
				<option>{{ $p->idPegawai }}</option>
			</select>
		</div>
		<div class="form-group">
			<label>Nama</label>
		<input type="text" name="nama" required class="form-control" placeholder="Masukan Nama" value="{{ $p->nama }}">
		</div>
		<div class="form-group">
			<label>Jabatan</label>
			<input type="text" name="jabatan" required class="form-control" placeholder="Masukan Jabatan" value="{{ $p->jabatan }}">
		</div>
		<div class="form-group">
			<label>Umur</label>
			<input type="number" name="umur" required class="form-control" placeholder="Masukan Umur" value="{{ $p->umur }}">
		</div>
		<div class="form-group">
			<label>Alamat</label>
			<textarea name="alamat" required class="form-control" rows="3">{{ $p->alamat }}</textarea>
		</div>
		<button type="submit" class="btn btn-primary">Simpan</button>
		<a href="/pegawai" class="btn btn-danger">Batal</a>
	</form>	
	@endforeach
@endsection