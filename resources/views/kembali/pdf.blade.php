<DOCTYPE html>
<html>
<head>
    <title>produk PDF </title>
    <link href=" {{ asset ('public bootstrap/css/
bootstrap.min.css') }} "rel="stylesheet">
</head>
<body>
<div class="panel panel - default">
   <div class="panel-heading">
        <h3=align="center">Daftar  Produk </h3>
</div>
<div class="panel-body">
<table class ="table table-striped">
<thead>
   <tr>
   <th>NO</th>
   <th>Nama  Produk</th>
   <th>Kategori</th> 
   <th>Harga  Jual</th>
<tr>

<trybody>
  @foreach ($produk as $data)

<tr>
<td>{{   ++$no }}</td>
<td>  $data->nama  produk }}</td> 
<td>  $data->nama kategori  }}</td> 
<td>  $data->harga  jual}}</td> 
</tr> 
    @endforeach
  </tobody>
</table>

  </div>
</div>
</body>
</html>

