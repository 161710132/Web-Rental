<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kembali extends Model
{
protected $fillable = ['tgl_kembali_akhir','jumlah_hari','telat','denda','total_harga','rental_id'];
    
    public $timestamps = true;

    
    public function Rental()
    {
    	return $this->belongsTo('App\Rental','rental_id');
    }

   

    

    
}
