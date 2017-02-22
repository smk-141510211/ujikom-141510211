<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PegawaiModel extends Model
{
    protected $table = 'pegawais';
    protected $fillable = ['Nip','User_id', 'Jabatan_id', 'Golongan_id', 'Photo'];
    protected $visible = ['Nip','User_id', 'Jabatan_id', 'Golongan_id', 'Photo'];
    public $timestamps = true;


    public function users(){
    	return $this->belongsTo('App\User', 'User_id');
    }
    public function jabatans(){
    	return $this->belongsTo('App\JabatanModel', 'Jabatan_id');
    }
    public function golongans(){
    	return $this->belongsTo('App\GolonganModel', 'Golongan_id');
    }
    public function lembur_pegawais(){
        return $this->hasMany('App\LemburPegawaiModel', 'Pegawai_id');
    }
    public function tunjangan_pegawais(){
        return $this->hasOne('App\TunjanganPegawaiModel', 'Pegawai_id');
    }
}
