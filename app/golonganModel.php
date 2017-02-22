<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GolonganModel extends Model
{
    protected $table = 'golongans';
    protected $fillable = ['Kode_golongan', 'Nama_golongan', 'Besaran_uang'];
    protected $visible = ['Kode_golongan', 'Nama_golongan', 'Besaran_uang'];
    public $timestamps = true;

    public function kategori_lemburs(){
    	return $this->hasMany('App\KategoriLemburModel', 'Golongan_id');
    }
    public function pegawais(){
        return $this->hasMany('App\PegawaiModel', 'Golongan_id');
    }
    public function tunjangans(){
        return $this->hasMany('App\TunjanganModel', 'Golongan_id');
    }
}
