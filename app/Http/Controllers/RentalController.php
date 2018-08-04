<?php

namespace App\Http\Controllers;

use App\Rental;
use App\Mobil;
use App\Supir;
use Illuminate\Http\Request;
use Session;
use Carbon\Carbon;

class RentalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rental=Rental::all();
        return view('rental.index',compact('rental'));
    }

    public function thanks()
    {
          return view('adminn.thanks');
    }

     

     

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $mobil = Mobil::all();
        $supir = Supir::all();
        return view('rental.create',compact('mobil','supir'));
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
        $rental = new Rental;
        $rental->nik_kons = $request->nik_kons;
        $rental->nama_kons = $request->nama_kons;
        $rental->jk_kons = $request->jk_kons;
        $rental->alamat = $request->alamat;
        $rental->no_hp = $request->no_hp;
        $rental->tgl_sewa = $request->tgl_sewa;
        $rental->tgl_kembali = $request->tgl_kembali;
        $rental->mobil_id = $request->mobil_id;
        $rental->supir_id = $request->supir_id;

        $awal = new Carbon($request->tgl_sewa);
        $akhir = new Carbon ($request->tgl_kembali);
        $hasil = "{$awal->diffInDays($akhir)}";
        $rental->jumlah_hari = $hasil;

        $mobil = Mobil::where('id', $rental->mobil_id)->first();
        $hargamobil = $mobil->harga_sewa;

        $supir = Supir::where('id', $rental->supir_id)->first();
        $hargasupir = $supir->harga_sewasupir;

        $rental->total_sewa=($hargamobil + $hargasupir) * $hasil;

        // return $rental;
        $rental->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$rental->nama_kons</b>"
        ]);
        return redirect()->route('rental.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rental  $rental
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mobil = Mobil::all();
        $supir = Supir::all();
        $rental = Rental::findOrFail($id);
        return view('rental.show',compact('mobil','supir','rental'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rental  $rental
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         //
        $rental = Rental::findOrFail($id);
        $supir = Supir::all();
        $mobil = Mobil::all();
        return view('rental.edit', compact('rental','supir','mobil')); 
    }

    public function creates($id)
    {
       
        $rental = Rental::findOrFail($id);
        $kembali = Kembali::all();
        return view('kembali.create', compact('rental','kembali'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rental  $rental
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        Session::flash("flash_notification", [
                "level"=>"success",
                "message"=>"Berhasil Menyimpan Data Rental"]);

        $mobil = Mobil::findOrFail($id);
        $mobil->status = "Disewa";
        $mobil->save();

        $rental = Rental::findOrFail($id);
        $rental->nik_kons = $request->nik_kons;
        $rental->nama_kons = $request->nama_kons;
        $rental->jk_kons = $request->jk_kons;
        $rental->alamat = $request->alamat;
        $rental->no_hp = $request->no_hp;
        $rental->tgl_sewa = $request->tgl_sewa;
        $rental->tgl_kembali = $request->tgl_kembali;
        $rental->jumlah_hari = $request->jumlah_hari;
        $rental->total_sewa = $request->total_sewa;
        $rental->mobil_id = $request->mobil_id;
        $rental->supir_id = $request->supir_id;

        $awal = new Carbon($request->tgl_sewa);
        $akhir = new Carbon ($request->tgl_kembali);
        $hasil = "{$awal->diffInDays($akhir)}";
        $rental->jumlah_hari = $hasil;
        // $rental->total_sewa=($hargasewa + $supir->hargasewa_supir) * $hasil;

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
     * @param  \App\Rental  $rental
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rental = Rental::findOrFail($id);
        $rental->delete();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data Berhasil dihapus"
        ]);
        return redirect()->route('rental.index');
    }



    
    
}
