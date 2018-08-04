
@section('content')
<section class="content-header">
  <h1>
    Detail Mobil
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="fa fa-car">Data Rental</li><li class="active">Detail Data Rental</li>
  </ol>
</section><br><br>
<div class="box box-info">
  <div class="box-header with-border">
    <h3 class="box-title">Data</h3>

    <div class="box-tools pull-right">
    </div>
  </div>

              <!-- /.box-header -->
  <div class="box-body">
    <div class="table-responsive">
      <table class="table no-margin">
        <tr style="border-top:1px black solid;border-bottom:1px black solid;">
          <td width="300"><font size="4px"><b>NIK Konsumen</b></font></td><td width="30px">&nbsp<b>:</b>&nbsp</td><td><font size="4px">{{$kembali->nik_kons}}</font></td>
        </tr>
        <tr style="border-top:1px black solid;border-bottom:1px black solid;">
          <td width="300"><font size="4px"><b>Nama Konsumen</b></font></td><td width="30px">&nbsp<b>:</b>&nbsp</td><td><font size="4px">{{$kembali->nama_kons}}</font></td>
        </tr>
        <tr style="border-top:1px black solid;border-bottom:1px black solid;">
          <td width="300"><font size="4px"><b>Jenis Kelamin</b></font></td><td width="30px">&nbsp<b>:</b>&nbsp</td><td><font size="4px">{{$kembali->jk_kons}}</font></td>
        </tr>
        <tr style="border-top:1px black solid;border-bottom:1px black solid;">
          <td width="300"><font size="4px"><b>Alamat</b></font></td><td width="30px">&nbsp<b>:</b>&nbsp</td><td><font size="4px">{{$kembali->alamat}}</font></td>
        </tr>
        <tr style="border-top:1px black solid;border-bottom:1px black solid;">
          <td width="300"><font size="4px"><b>No HP</b></font></td><td width="30px">&nbsp<b>:</b>&nbsp</td><td><font size="4px">{{$kembali->no_hp}}</font></td>
        </tr>
        <tr style="border-top:1px black solid;border-bottom:1px black solid;" >
          <td><font size="4px"><b>Tanggal Sewa </b></font></td><td width="30px">&nbsp<b>:</b>&nbsp</td><td><font size="4px">{{$kembali->tgl_sewa}}</font></td>
        </tr>
        <tr style="border-top:1px black solid;border-bottom:1px black solid;" >
          <td><font size="4px"><b>Tanggal Kembali</b></font></td><td width="30px">&nbsp<b>:</b>&nbsp</td><td><font size="4px">{{$kembali->tgl_kembali}}</font></td>
        </tr>
        <tr style="border-top:1px black solid;border-bottom:1px black solid;" >
          <td><font size="4px"><b>Jumlah Hari</b></font></td><td width="30px">&nbsp<b>:</b>&nbsp</td><td><font size="4px">{{$kembali->jumlah_hari}} Hari</font></td>
        </tr>

        <tr style="border-top:1px black solid;" >
          <td><font size="4px"><b>Tanggal Kembali Akhir</b></font></td><td width="30px">&nbsp<b>:</b>&nbsp</td><td><font size="4px">{{$kembali->tgl_kembali_akhir}}</font></td>
        </tr>

         <tr style="border-top:1px black solid;border-bottom:1px black solid;" >
          <td><font size="4px"><b>Jumlah Hari </b></font></td><td width="30px">&nbsp<b>:</b>&nbsp</td><td><font size="4px">{{$kembali->jumlah_hari}} Hari</font></td>
        </tr>

        <tr style="border-top:1px black solid;border-bottom:1px black solid;" >
          <td><font size="4px"><b>Telat</b></font></td><td width="30px">&nbsp<b>:</b>&nbsp</td><td><font size="4px">{{$kembali->telat}} Hari</font></td>
        </tr>
        <tr style="border-top:1px black solid;border-bottom:1px black solid;" >
          <td><font size="4px"><b>Denda</b></font></td><td width="30px">&nbsp<b>:</b>&nbsp</td><td><font size="4px">Rp.{{number_format($kembali->denda,2,',','.')}}</font></td>
        </tr>

        <tr style="border-top:1px black solid;border-bottom:1px black solid;" >
          <td><font size="4px"><b>Total Harga</b></font></td><td width="30px">&nbsp<b>:</b>&nbsp</td><td><font size="4px">Rp.{{number_format($kembali->total_harga,2,',','.')}}</font></td>
        </tr>
        
      </table>
    </div>
  </div>
</div>

@endsection
