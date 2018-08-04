<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supir extends Model
{
    protected $fillable = ['foto_supir','nama','jenis_kelamin','nik','no_hp','alamat','umur','harga_sewasupir','status'];
    public $timestamps = true;

    public function Mobil()
    {
    	return $this->belongsToMany('App\Mobil','bookings','mobil_id','supir_id');
    }

    

    public function Rental()
    {
        return $this->hasMany('App\Rental','supir_id');
    }

    
}
