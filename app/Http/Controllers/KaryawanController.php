<?php

namespace App\Http\Controllers;

use App\Kembali;
use App\Mobil;
use App\Rental;
use App\Supir;
use Carbon\Carbon;
use Session;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kembali = Kembali::all();
        $rental = Rental::all();
        $mobil = Mobil::all();
        $supir = Supir::all();
        return view('karyawan.index',compact('kembali','rental','mobil','supir'));
    }

    public function mobil()
    {
       
        $mobil = Mobil::all();
       
        return view('member.mobil',compact('mobil'));
    }

    public function supir()
    {
       
        $supir = Supir::all();
       
        return view('member.supir',compact('supir'));
    }

     public function rental()
    {
       
        $rental = Rental::all();
       
        return view('member.rental',compact('rental'));
    }

     public function kembali()
    {
       
        $kembali = Kembali::all();
       
        return view('member.kembali',compact('kembali'));
    }
     public function thanks()
    {
          return view('member.thanks',compact('kembali'));
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
        return view('member.rentalcreate',compact('mobil','supir'));
    }

    public function createkembali()
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
        $rental->status="Belum";

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
        return redirect()->route('rental');
    }

    public function storekembali(Request $request)
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
        $mobil = Mobil::findOrFail($id);
        return view('member.showmobil',compact('mobil'));
    }

    public function showsupir($id)
    {
        $supir = Supir::findOrFail($id);
        return view('member.showsupir',compact('supir'));
    }

    public function showrental($id)
    {
        $rental = Rental::findOrFail($id);
        return view('member.showrental',compact('rental'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rental = Rental::findOrFail($id);
        $mobil = Mobil::all();
        $selectedMobil = Rental::findOrFail($id)->mobil_id;
        $supir = Supir::all();
        $selectedSupir = Rental::findOrFail($id)->supir_id;
        
        // dd($selected);
        return view('member.rentaledit',compact('rental','mobil','selectedMobil','supir','selectedSupir'));
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
            'jumlah_hari' => 'required|',
            'total_sewa' => 'required|',
            'mobil_id' => 'required|',
            'supir_id' => 'required|'

        ]);
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

        $rental->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$rental->nama_kons</b>"
        ]);
        return redirect()->route('rental');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
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
        return redirect()->route('rental');
    }
}
