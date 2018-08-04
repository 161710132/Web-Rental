$rental = Rental::where('id', $request->rental_id)->first();
        $hargamobil = $rental->Mobil->harga_sewa;
        $hargasupir = $rental->Supir->harga_sewasupir;
        $kembali->denda = $hasil * ($hargamobil + $hargasupir);

        $kembali->total_harga = $rental->total_sewa + $kembali->denda;