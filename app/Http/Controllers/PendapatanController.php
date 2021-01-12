<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PendapatanController extends Controller
{
    public function index()
    {
        // mengambil data dari table pendapatan
        $pendapatan = DB::table('pendapatan')->orderBy('idPegawai','asc')->paginate(5);

        // mengirim data ke home page
        return view('pendapatan/index',['pendapatan' => $pendapatan]);
    }
    public function tambah()
	{
		$pegawai = DB::table('pegawai')->get();

		// memanggil view tambah
		return view('pendapatan/tambah',['pegawai' => $pegawai]);
	}

	// method untuk insert data ke table pendapatan
	public function store(Request $request)
	{
		DB::table('pendapatan')->insert([
			'idPegawai'=> $request->idPegawai,
            'bulan'=> $request->bulan,
            'tahun'=> $request->tahun,
            'gaji'=> $request->gaji,
			'tunjangan'=> $request->tunjangan
		]);

		// setelah ditambah akan dikembalikan ke home page
		return redirect('/pendapatan');
    }
    public function hapus($idPegawai)
	{
		// menghapus data pendapatan pegawai dari table pendapatan berdasarkan idPegawai
		DB::table('pendapatan')->where('idPegawai', $idPegawai)->delete();

		// setelah dihapus akan dikembalikan ke home page
		return redirect('/pendapatan');
    }
    public function edit($idPegawai)
	{
		// mengambil data pendapatan berdasarkan id yang dipilih
		$pendapatan = DB::table('pendapatan')->where('idPegawai',$idPegawai)->get();
		$pegawai = DB::table('pegawai')->get();
		// passing data pendapatan yang didapat ke view edit.blade.php
		return view('pendapatan/edit', ['pegawai' => $pegawai],['pendapatan' => $pendapatan]);
	}

	// update data pendapatan
	public function update(Request $request)
	{
		// update data pendapatan
		DB::table('pendapatan')->where('idPegawai',$request->idPegawai)->update([
			'idPegawai' => $request->idPegawai,
			'bulan' => $request->bulan,
            'tahun' => $request->tahun,
            'gaji' => $request->gaji,
			'tunjangan' => $request->tunjangan
		]);
		// alihkan halaman ke halaman pendapatan
		return redirect('/pendapatan');
	}

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    	// mengambil data dari table pendapatan sesuai pencarian data
		$pendapatan = DB::table('pendapatan')
		->where('idPegawai','like',"%".$cari."%")
		->paginate();
 
    	// mengirim data pendapatan ke view index
		return view('pendapatan/index',['pendapatan' => $pendapatan]);
 
	}
}