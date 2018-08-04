<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    protected $fillable = ['nik_kons','nama_kons','jk_kons','alamat','no_hp','tgl_sewa','tgl_kembali','jumlah_hari','total_sewa','supir_id','status'];

     public $timestamps = true;

     public function Mobil()
    {
        return $this->belongsTo('App\Mobil','mobil_id');
    }

    public function Supir()
    {
    	return $this->belongsTo('App\Supir','supir_id');
    }

    public function Kembali()
    {
    	return $this->HasOne('App\Kembali','rental_id');
    }
    
}
