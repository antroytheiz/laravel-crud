@extends('layout.base')
@section('title','Tambah Pendapatan | Pegawai')
@section('content')
<a href="/pendapatan" style="text-decoration: none">
	<h2 style="text-align: center" class="mt-5">Pemrograman Web</h2>
	<h3 style="text-align: center">Tambah Pendapatan Pegawai</h3>
</a>
<br><br>

<form action="/pendapatan/store" method="post">
	{{ csrf_field() }}
	<div class="form-group">
		<label>ID Pegawai</label>
		<select name="idPegawai" class="form-control" required>
			@foreach ($pegawai as $p)
				<option>{{ $p->idPegawai }}</option>
			@endforeach
		</select>
	</div>
	<div class="form-group">
		<label>Bulan</label>
		<input type="text" name="bulan" class="form-control" placeholder="Masukan Bulan">
    </div>
    <div class="form-group">
		<label>Tahun</label>
		<input type="text" name="tahun" class="form-control" placeholder="Masukan Tahun">
    </div>
    <div class="form-group">
		<label>Gaji</label>
		<input type="text" name="gaji" class="form-control" placeholder="Masukan Gaji">
	</div>
	<div class="form-group">
		<label>Tunjangan</label>
		<input type="text" name="tunjangan" class="form-control" placeholder="Masukan Tunjangan">
	</div>
	<button type="submit" class="btn btn-primary">Simpan</button>
	<a href="/pendapatan" class="btn btn-danger">Batal</a>
</form>
@endsection
