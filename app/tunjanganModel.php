<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TunjanganModel extends Model
{
     protected $table = 'tunjangans';
    protected $fillable = ['Kode_tunjangan', 'Jabatan_id', 'Golongan_id', 'Status', 'Jumlah_anak', 'Besaran_uang'];
    protected $visible = ['Kode_tunjangan', 'Jabatan_id', 'Golongan_id', 'Status', 'Jumlah_anak', 'Besaran_uang'];
    public $timestamps = true;


    public function jabatans(){
    	return $this->belongsTo('App\JabatanModel', 'Jabatan_id');
    }
    public function golongans(){
    	return $this->belongsTo('App\GolonganModel', 'Golongan_id');
    }
    public function tunjangan_pegawais(){
        return $this->hasMany('App\TunjanganPegawaiModel', 'Kode_tunjangan_id'); 
    }
}
