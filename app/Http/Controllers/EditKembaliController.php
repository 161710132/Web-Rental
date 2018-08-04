<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kembali;
use Carbon\Carbon;

class EditKembaliController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
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
        //
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
        $rental = Kembali::findOrFail($id);
        $rental->tgl_sewa= $request->tgl_sewa;
        $rental->tgl_kembali_akhir= $request->tgl_kembali_akhir;

        $awal = new Carbon($request->tgl_sewa);
        $akhir = new Carbon ($request->tgl_kembali);
        $hasil = "{$awal->diffInDays($akhir)}";
        $rental->jumlah_hari = $hasil;

        $mobil = Mobil::where('id', $rental->mobil_id)->first();
        $hargamobil = $mobil->harga_sewa;

        $supir = Supir::where('id', $rental->supir_id)->first();
        $hargasupir = $supir->harga_sewasupir;

        $rental->total_sewa=($hargamobil + $hargasupir) * $hasil;

        
       
        
        
        $rental->save();
        return redirect('kembali');
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
