<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/welcome', function () {
//     return view('welcome');
// })->name('home');

// Home Page
Route::get('/', 'HomeController@home')->name('home');

// pegawai
Route::get('pegawai', 'PegawaiController@index')->name('pegawai');
Route::get('pegawai/tambah', 'PegawaiController@tambah');
Route::post('pegawai/store', 'PegawaiController@store');
Route::get('pegawai/hapus/{id}', 'PegawaiController@hapus');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/cari','PegawaiController@cari');
Route::get('/pegawai/detail/{id}', 'PegawaiController@detail');

// pendapatan
Route::get('/pendapatan', 'PendapatanController@index')->name('pendapatan');
Route::get('pendapatan/tambah', 'PendapatanController@tambah');
Route::post('pendapatan/store', 'PendapatanController@store');
Route::get('pendapatan/hapus/{id}', 'PendapatanController@hapus');
Route::get('/pendapatan/edit/{id}','PendapatanController@edit');
Route::post('/pendapatan/update','PendapatanController@update');
Route::get('/pendapatan/cari','PendapatanController@cari');

// // tugas
// Route::get('/tugas', 'TugasController@index')->name('tugas');
// Route::get('tugas/tambah', 'TugasController@tambah');
// Route::post('tugas/store', 'TugasController@store');
// Route::get('tugas/hapus/{id}', 'TugasController@hapus');
// Route::get('/tugas/edit/{id}','TugasController@edit');
// Route::post('/tugas/update','TugasController@update');
// Route::get('/tugas/cari','TugasController@cari');
