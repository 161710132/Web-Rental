<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class Select2Controller extends Controller
{
    public function index()
    {
    	return view('index');
    }

    public function loadData(Request $request)
    {
    	if ($request->has('q')) {
    		$cari = $request->q;
    		$data = DB::table('mobils')->select('id', 'nama')->where('nama', 'LIKE', '%$cari%')->get();
    		return response()->json($data);
    	}
    }
}
