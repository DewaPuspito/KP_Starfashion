<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <nav class="navbar navbar-dark bg-primary">
    <div class="container-fluid">
    <a class="navbar-brand" href="/cutting-menu">Checklist Mesin</a>
    <img src="/images/logo.jpg" alt="Logo Starfashion" width="100" height="24">
    </div>
  </div>
</nav>
    <title>Checklist Mesin</title>
  </head>
  <body>
    <h1><center>Band Knife Machine<center></h1>  
    <div class="container">
    <div class="row g-3 align-items-center mt-2 mb-3">
    <div class="col-auto">
    <a class="btn btn-success" href="/addbandknife" role="button">Add Item</a>
    </div>
      <div class="col-auto">
        <a class="btn btn-success" href="/exportbandknife" role="button">Export Excel</a>
      </div>
    </div>
    
    @if ($message = Session::get('success'))
      <div class="alert alert-success" role="alert">
        {{ $message }}
      </div>
      @endif

    <table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th scope="col">Serial Number</th>
      <th scope="col">Tipe</th>
      <th scope="col">Merk Mesin</th>
      <th scope="col">Bagian</th>
      <th scope="col">Tahun Pembelian</th>
      <th scope="col">Tanggal Sparepart Diganti</th>
      <th scope="col">Jenis Sparepart yang Diganti</th>
      <th scope="col">Harga Sparepart</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data_bandknife as $bandknife)
    <tr>
      <th scope="row">{{$bandknife->serial_number}}</th>
      <td>{{$bandknife->tipe}}</td>
      <td>{{$bandknife ->merk_mesin}}</td>
      <td>{{$bandknife ->bagian}}</td>
      <td>{{$bandknife ->tahun_pembelian}}</td>
      <td>{{$bandknife ->tanggal_sparepart_diganti}}</td>
      <td>{{$bandknife ->sparepart->nama_sparepart ?? 'N/A'}}</td>
      <td>{{$bandknife ->sparepart->harga_sparepart ?? 'N/A'}}</td>
      <td><a class="btn btn-info" href="/showbandknife/{{$bandknife ->serial_number}}" role="button">Details</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
</body>
</html>