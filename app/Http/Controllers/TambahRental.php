<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rental;
use App\Supir;
use App\Mobil;
use App\Kembali;
use Session;
use File;
use Carbon\Carbon;

class TambahRental extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $this->validate($request,[
            'nik_kons' => 'required|',
            'nama_kons' => 'required|',
            'jk_kons' => 'required|',
            'alamat' => 'required|',
            'no_hp' => 'required|',
            'tgl_sewa' => 'required|',
            'tgl_kembali' => 'required|',
            'mobil_id' => 'required|',
            'supir_id' => 'required|'
             ]);

       Session::flash("flash_notification", [
                "level"=>"success",
                "message"=>"Berhasil Menyimpan Data Rental"]);

        $mobil = Mobil::findOrFail($id);
        $mobil->status = "Disewa";
        $mobil->save();

        $rental = new rental;
        $rental->nik_kons=$request->nik_kons;
        $rental->nama_kons =$request->nama;
        $rental->jk_kons=$request->jk;
        $rental->alamat=$request->alamat;
        $rental->no_hp=$request->no_hp;
        $rental->status="Belum";
        
        $rental->tgl_sewa=$request->tgl_sewa;
        $rental->tgl_kembali=$request->tgl_kembali;

        $awal = new Carbon($request->tgl_sewa);
        $akhir = new Carbon($request->tgl_kembali);
        $hasil= "{$awal->diffInDays($akhir)}";
        $rental->jumlah_hari=$hasil;
        $rental->mobil_id=$request->mobil_id;
        $rental->supir_id=$request->supir_id;
        $rental->total_sewa=($hargasewa + $supir->harga_sewasupir) * $hasil;

        if ($rental->supir->i=="ya") {
            $supir->status="Disewa";
            $supir->save();
        }

        $rental->save();
        return view('mobil.tambahrental');




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
