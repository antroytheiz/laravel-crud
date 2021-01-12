@extends('layout.base')
@section('title','Edit Pendapatan | Pegawai')
@section('content')
<a href="/pendapatan" style="text-decoration: none">
	<h2 style="text-align: center" class="mt-5">Pemrograman Web</h2>
	<h3 style="text-align: center">Edit Pendapatan Pegawai</h3>
</a>
<br><br>
@foreach ($pendapatan as $p)
<form action="/pendapatan/update" method="post">
    {{ csrf_field() }}
	<div class="form-group">
		<label>ID Pegawai</label>
		<select name="idPegawai" class="form-control" required>
			{{-- @foreach ($pegawai as $pe) --}}
				<option>{{ $p->idPegawai }}</option>
			{{-- @endforeach --}}
		</select>
	</div>
	<div class="form-group">
		<label>Bulan</label>
		<input type="number" name="bulan" class="form-control" placeholder="Masukan Bulan" value="{{ $p->bulan }}">
    </div>
    <div class="form-group">
		<label>Tahun</label>
		<input type="text" name="tahun" class="form-control" placeholder="Masukan Tahun" value="{{ $p->tahun }}">
    </div>
    <div class="form-group">
		<label>Gaji</label>
		<input type="number" name="gaji" class="form-control" placeholder="Masukan Gaji" value="{{ $p->gaji }}">
	</div>
	<div class="form-group">
		<label>Tunjangan</label>
		<input type="number" name="tunjangan" class="form-control" placeholder="Masukan Tunjangan" value="{{ $p->tunjangan }}">
	</div>
	<input type="submit" class="btn btn-primary" value="Simpan">
	<a href="/pendapatan" class="btn btn-danger">Batal</a>
</form>
@endforeach
@endsection
