<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
 
class PegawaiController extends Controller
{
    public function index()
    {
    	// // mengambil data dari table pegawai
    	// $pegawai = DB::table('pegawai')->get();
 
    	// // mengirim data pegawai ke view index
		// return view('index',['pegawai' => $pegawai]);
		
		// mengambil data dari table pegawai
		$pegawai = DB::table('pegawai')->orderBy('idPegawai','desc')->paginate(5);
 
    		// mengirim data pegawai ke view index
		return view('pegawai/index',['pegawai' => $pegawai]);
 
	}

	public function detail($idPegawai)
    {
		// mengambil data dari table pendapatan dan pegawai
		$pendapatan = DB::table('pendapatan')->where('idPegawai',$idPegawai)->get();
		$pegawai = DB::table('pegawai')->where('idPegawai',$idPegawai)->get();
		// $tugas = DB::table('tugas')->where('id',$id)->get();
 
    		// mengirim data pegawai ke view index
		return view('pegawai/detail',['pegawai' => $pegawai],['pendapatan' => $pendapatan]);
    }

	public function tambah()
	{
		// memanggil view tambah
		return view('pegawai/tambah');
	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		DB::table('pegawai')->insert([
			'nama'=> $request->nama,
			'jabatan'=> $request->jabatan,
			'umur'=> $request->umur,
			'alamat'=> $request->alamat
		]);

		// setelah ditambah akan dikembalikan ke home page
		return redirect('/pegawai');
	}

	public function hapus($idPegawai)
	{
		// menghapus data pegawai dari table pegawai berdasarkan id
		DB::table('pegawai')->where('idPegawai', $idPegawai)->delete();

		// setelah dihapus akan dikembalikan ke home page
		return redirect('/pegawai');
	}

	public function edit($idPegawai)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$pegawai = DB::table('pegawai')->where('idPegawai',$idPegawai)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('pegawai/edit',['pegawai' => $pegawai]);
	}

	// update data pegawai
	public function update(Request $request)
	{
		// update data pegawai
		DB::table('pegawai')->where('idPegawai',$request->idPegawai)->update([
			'nama' => $request->nama,
			'jabatan' => $request->jabatan,
			'umur' => $request->umur,
			'alamat' => $request->alamat
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/pegawai');
	}

	public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    	// mengambil data dari table pegawai sesuai pencarian data
		$pegawai = DB::table('pegawai')
		->where('nama','like',"%".$cari."%")
		->paginate();
 
    	// mengirim data pegawai ke view index
		return view('pegawai/index',['pegawai' => $pegawai]);
 
	}

}