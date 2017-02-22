<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriLemburModel extends Model
{
    protected $table = 'kategori_lemburs';
    protected $fillable = ['Kode_lembur', 'Jabatan_id', 'Golongan_id', 'Besaran_uang'];
    protected $visible = ['Kode_lembur', 'Jabatan_id', 'Golongan_id', 'Besaran_uang'];
    public $timestamps = true;

    public function jabatans(){
    	return $this->belongsTo('App\JabatanModel', 'Jabatan_id');
    }
    public function golongans(){
    	return $this->belongsTo('App\GolonganModel', 'Golongan_id');
    }
    public function lembur_pegawais(){
        return $this->hasMany('App\LemburPegawaiModel', 'Kode_lembur_id');
    }
}
