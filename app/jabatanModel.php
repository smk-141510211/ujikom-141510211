<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JabatanModel extends Model
{
    protected $table = 'jabatans';
    protected $fillable = ['Kode_jabatan', 'Nama_jabatan', 'Besaran_uang'];
    protected $visible = ['Kode_jabatan', 'Nama_jabatan', 'Besaran_uang'];
    public $timestamps = true;

    public function kategori_lemburs(){
    	return $this->hasMany('App\KategoriLemburModel', 'Jabatan_id');
    }
    public function pegawais(){
        return $this->hasMany('App\PegawaiMOdel', 'Jabatan_id');
    }
    public function tunjangans(){
        return $this->hasMany('App\TunjanganModel', 'Jabatan_id');
    }
}
