<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(); 

Route::get('/', 'HomeController@index');

// User
Route::resource('pegawai','PegawaiController');

Route::resource('jabatan','JabatanController');
Route::resource('golongan','GolonganController');

// Lembur
Route::resource('lembur_pegawai','LemburPegawaiController');
Route::resource('kategori_lembur','KategoriLemburController');

// Tunjangan
Route::resource('tunjangan','TunjanganController');
Route::resource('tunjangan_pegawai','TunjanganPegawaiController');

// Penggajian
Route::resource('penggajian','PenggajianController');
