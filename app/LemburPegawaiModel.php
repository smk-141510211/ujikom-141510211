<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LemburPegawaiModel extends Model
{
    protected $table = 'lembur_pegawais';
    protected $fillable = ['Kode_lembur_id', 'Pegawai_id', 'Jumlah_jam'];
    protected $visible = ['Kode_lembur_id', 'Pegawai_id', 'Jumlah_jam'];
    public $timestamps = true;

    public function kategori_lemburs(){
    	return $this->belongsto('App\KategoriLemburModel', 'Kode_lembur_id');
    }
    public function pegawais(){
    	return $this->belongsto('App\PegawaiModel', 'Pegawai_id');
    }
}
