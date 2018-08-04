<?php

namespace App\Http\Controllers;

use App\Supir;
use Illuminate\Http\Request;
use Session;
use File;

class SupirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $supir = Supir::all();
        return view('supir.index',compact('supir'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('supir.create');
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
            'foto_supir' => 'required|',
            'nama' => 'required|',
            'jenis_kelamin' => 'required|',
            'nik' => 'required|',
            'no_hp' => 'required|',
            'alamat'=>'required|',
            'umur'=>'required|',
            'harga_sewasupir'=>'required|'
        ]);
        $supir = new Supir;
        $supir->nama = $request->nama;
        $supir->jenis_kelamin = $request->jenis_kelamin;
        $supir->nik = $request->nik;
        $supir->no_hp = $request->no_hp;
        $supir->alamat = $request->alamat;
        $supir->umur = $request->umur;
        $supir->harga_sewasupir = $request->harga_sewasupir;
        $supir->status = "Belum";
       if ($request->hasFile('foto_supir')) {
            $file = $request->file('foto_supir');
            $filename = str_random(6). '_'.$file->getClientOriginalName();
            $desinationPath = public_path() .DIRECTORY_SEPARATOR. 'img';
            $uploadSucces = $file->move($desinationPath, $filename);
            $supir->foto_supir = $filename;
        }
            $supir->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$supir->nama</b>"
        ]);
        return redirect()->route('supir.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Supir  $supir
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $supir = Supir::findOrFail($id);
        return view('supir.show',compact('supir'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Supir  $supir
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $supir = Supir::findOrFail($id);
        return view('supir.edit',compact('supir'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Supir  $supir
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'foto_supir' => 'required|',
            'nama' => 'required|',
            'jenis_kelamin' => 'required|',
            'nik' => 'required|',
            'no_hp' => 'required|',
            'alamat'=>'required|',
            'umur'=>'required|',
            'harga_sewasupir'=>'required|'
        ]);
        $supir = Supir::findOrFail($id);
        
        $supir->nama = $request->nama;
        $supir->jenis_kelamin = $request->jenis_kelamin;
        $supir->nik = $request->nik;
        $supir->no_hp = $request->no_hp;
        $supir->alamat = $request->alamat;
        $supir->umur = $request->umur;
        $supir->harga_sewasupir = $request->harga_sewasupir;

        //edit upload foto

        if ($request->hasFile('foto_supir')) {
            $file = $request->file('foto_supir');
            $desinationPath = public_path() .DIRECTORY_SEPARATOR. 'img';
            $filename = str_random(6). '_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($desinationPath, $filename);
            
            //hapus foto lama jika ada
            if($supir->foto_supir){
                $old_foto = $supir->foto_supir;
                $filepath = public_path(). DIRECTORY_SEPARATOR.'img' .DIRECTORY_SEPARATOR. $supir->foto_supir;
                try {

                    File::delete($filepath);
                } catch (FileNotFoundException $e){

                //file suda dihapus atau tidak ada

                }
            }

            $supir->foto_supir = $filename;
        }

        $supir->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$supir->nama</b>"
        ]);
        return redirect()->route('supir.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Supir  $supir
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $supir = Supir::findOrFail($id);
        if ($supir->foto_supir){
            $old_foto = $supir->foto_supir;
            $filepath = public_path() . DIRECTORY_SEPARATOR . 'img' . DIRECTORY_SEPARATOR . $supir->foto_supir; 
            try {
                File::delete($filepath);
            } catch (FileNotFoundException $e){

                //file sudah dihapus/tidak ada
            }
        } 
        $supir->delete();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data Berhasil dihapus"
        ]);
        return redirect()->route('supir.index');
    }

    public function Sewa($id)
    {
        $supir = Supir::find($id);

        if ($supir->status === 1) {
            $supir->status = 0;
        } else {
            $supir->status= 1;
        }

        $supir->save();
        return redirect()->route('supir.index');
    }

}
