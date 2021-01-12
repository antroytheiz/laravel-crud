<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TugasController extends Controller
{
    public function index()
    {
        // mengambil data dari table tugas
        $tugas = DB::table('tugas')->orderBy('idPegawai','asc')->paginate(5);

        // mengirim data ke home page
        return view('tugas/index',['tugas' => $tugas]);
    }

    public function tambah()
	{
		// memanggil view tambah
		return view('tugas/tambah');
	}

	// method untuk insert data ke table tugas
	public function store(Request $request)
	{
		DB::table('tugas')->insert([
			'idPegawai'=> $request->idPegawai,
            'tanggal'=> $request->tanggal,
            'namaTugas'=> $request->namaTugas,
            'status'=> $request->status
		]);

		// setelah ditambah akan dikembalikan ke home page
		return redirect('/tugas');
    }

    public function hapus($id)
	{
		// menghapus data tugas pegawai dari table tugas berdasarkan id
		DB::table('tugas')->where('id', $id)->delete();

		// setelah dihapus akan dikembalikan ke home page
		return redirect('/tugas');
    }

    public function edit($id)
	{
		// mengambil data tugas berdasarkan id yang dipilih
		$tugas = DB::table('tugas')->where('id',$id)->get();
		// passing data tugas yang didapat ke view edit.blade.php
		return view('tugas/edit',['tugas' => $tugas]);
    }
    
    // update data tugas
	public function update(Request $request)
	{
		// update data tugas
		DB::table('tugas')->where('id',$request->id)->update([
			'idPegawai'=> $request->idPegawai,
            'tanggal'=> $request->tanggal,
            'namaTugas'=> $request->namaTugas,
            'status'=> $request->status
		]);
		// alihkan halaman ke halaman tugas
		return redirect('/tugas');
	}

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    	// mengambil data dari table tugas sesuai pencarian data
		$tugas = DB::table('tugas')
		->where('idPegawai','like',"%".$cari."%")
		->paginate();
 
    	// mengirim data tugas ke view index
		return view('tugas/index',['tugas' => $tugas]);
 
	}
}
