<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PenggajianModel extends Model
{
     protected $table = 'penggajians';
    protected $fillable = ['Tunjangan_pegawai_id', 'Jumlah_jam_lembur', 'Jumlah_uang_lembur', 'Gaji_pokok', 'Total_gaji', 'Tanggal_pengambilan', 'Status_pengambilan', 'Petugas_penerima'];
    protected $visible = ['Tunjangan_pegawai_id', 'Jumlah_jam_lembur', 'Jumlah_uang_lembur', 'Gaji_pokok', 'Total_gaji', 'Tanggal_pengambilan', 'Status_pengambilan', 'Petugas_penerima'];
    public $timestamps = true;

    public function tunjangan_pegawais(){
    	return $this->belongsTo('App\TunjanganPegawaiModel', 'Tunjangan_pegawai_id');
    }
}
