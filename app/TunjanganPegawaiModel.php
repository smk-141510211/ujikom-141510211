<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TunjanganPegawaiModel extends Model
{
    protected $table = 'tunjangan_pegawais';
    protected $fillable = ['Kode_tunjangan_id', 'Pegawai_id'];
    protected $visible = ['Kode_tunjangan_id', 'Pegawai_id'];
    public $timestamps = true;

    public function tunjangans(){
    	return $this->belongsTo('App\TunjanganModel', 'Kode_tunjangan_id');
    }
    public function pegawais(){
    	return $this->belongsTo('App\PegawaiModel', 'Pegawai_id');
    }
    public function penggajians(){
        return $this->belongsTo('App\PenggajianModel', 'Tunjangan_pegawai_id');
    }
}
