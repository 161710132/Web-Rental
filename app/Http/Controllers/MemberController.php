<?php

namespace App\Http\Controllers;
use App\Kembali;
use App\Rental;
use App\Mobil;
use App\Supir;
use Session;
use Carbon\Carbon;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kembali = Kembali::all();
       
        return view('member.kembali',compact('kembali'));
    }

    public function thanks()
    {
          return view('member.thanks');
    }

    public function daftarmobil()
    {
        $rental = Rental::all();
        $mobil = Mobil::all();
        $supir = Supir::all();
        return view('member.daftarmobil',compact('rental','mobil','supir'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kembali = Kembali::all();
        $rental = Rental::all();
        return view('member.createkembali',compact('kembali','rental'));
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
            
            'tgl_kembali_akhir'=>'required|',
            'rental_id'=>'required|'
                
                
        ]);
         
        $kembali = new Kembali;
        $kembali->tgl_kembali_akhir = $request->tgl_kembali_akhir;
        
        
        
        $awal = new Carbon($kembali->rental_id = $request->tgl_sewa);
        $akhir = new Carbon ($request->tgl_kembali_akhir);
        $hasil = "{$awal->diffInDays($akhir)}";
        $kembali->jumlah_hari = $hasil;

        $kembali->telat = $hasil- ($kembali->rental_id = $request->jumlah_hari);

        // $denda=($hasil * ($request->harga_sewa + $request->harga_sewasupir))- $request->total_sewa;
        // $rental->denda=$denda;
        // $rental->total_harga= $hasil * ($request->harga_mobil + $request->harga_supir);

        $rental = Rental::where('id', $request->rental_id)->first();
        $hargamobil = $rental->Mobil->harga_sewa;
        $hargasupir = $rental->Supir->harga_sewasupir;
        $kembali->denda = $hasil * ($hargamobil + $hargasupir);

        $kembali->total_harga = $rental->total_sewa + $kembali->denda;
        $kembali->rental_id = $request->rental_id;
        
        // return $kembali;
        $kembali->save();
        return redirect()->route('kembali');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kembali = Kembali::findOrFail($id);
        return view('member.showkembali',compact('kembali'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kembali = Kembali::findOrFail($id);
        $rental = Rental::all();
        $selectedRental = Kembali::findOrFail($id)->supir_id;
        
        // dd($selected);
        return view('member.editkembali',compact('kembali','rental','selectedRental'));
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
            
            'tgl_kembali_akhir'=>'required|',
            'rental_id'=>'required|'
                
                
        ]);

        $kembali = Kembali::findOrFail($id);
        $kembali->tgl_kembali_akhir = $request->tgl_kembali_akhir;
        
        
        
        $awal = new Carbon($kembali->rental_id = $request->tgl_sewa);
        $akhir = new Carbon ($request->tgl_kembali_akhir);
        $hasil = "{$awal->diffInDays($akhir)}";
        $kembali->jumlah_hari = $hasil;

        $kembali->telat = $hasil- ($kembali->rental_id = $request->jumlah_hari);

        // $denda=($hasil * ($request->harga_sewa + $request->harga_sewasupir))- $request->total_sewa;
        // $rental->denda=$denda;
        // $rental->total_harga= $hasil * ($request->harga_mobil + $request->harga_supir);

        $rental = Rental::where('id', $request->rental_id)->first();
        $hargamobil = $rental->Mobil->harga_sewa;
        $hargasupir = $rental->Supir->harga_sewasupir;
        $kembali->denda = $hasil * ($hargamobil + $hargasupir);

        $kembali->total_harga = $rental->total_sewa + $kembali->denda;
        $kembali->rental_id = $request->rental_id;
        
        // return $kembali;
        $kembali->save();
        return redirect()->route('kembali');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kembali = Kembali::findOrFail($id);
        $kembali->delete();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data Berhasil dihapus"
        ]);
        return redirect()->route('kembali.index');
    }
}
