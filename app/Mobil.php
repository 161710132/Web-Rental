<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    protected $fillable = ['foto_mobil','merk','perseneling','plat_no','warna','tahun_keluaran','harga_sewa','jenis','publish'];
    public $timestamps = false;

    

    public function Supir()
    {
    	return $this->belongsToMany('App\Supir','bookings','mobil_id','supir_id');
    }

    
    public function Rental()
    {
        return $this->hasMany('App\Rental','mobil_id');
    }

    
}
