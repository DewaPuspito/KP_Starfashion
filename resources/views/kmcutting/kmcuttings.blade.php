<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <nav class="navbar navbar-dark bg-primary">
    <div class="container-fluid">
    <a class="navbar-brand" href="/main-menu">Checklist Mesin</a>
    <img src="/images/logo.jpg" alt="Logo Starfashion" width="100" height="24">
    </div>
  </div>
</nav>
    <title>Checklist Mesin</title>
  </head>
  <body>
    <h1><center>KM Cutting Machine<center></h1>  
    <div class="container">
    <a class="btn btn-success" href="/addkmcutting" role="button">Add Item</a>
    <div class="row g-3 align-items-center mt-2 mb-3">
    <div class="col-auto">
    <label for="input" class="col-form-label">Search Here</label>
    </div>
    <div class="col-auto">
        <form action="/km-cutting" method='GET' class="d-flex">
          <input type="search" name="search" class="form-control" aria-describedby="passwordHelpInline">
        </form>
      </div>
      <div class="col-auto">
        <a class="btn btn-success" href="/exportkmcutting" role="button">Export Excel</a>
      </div>
    </div>
    <div class="row">
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
      <th scope="col">Jenis Sparepart yang Diganti</th>
      <th scope="col">Tanggal Sparepart Diganti</th>
      <th scope="col">Harga Sparepart</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data_km_cutting as $km_cutting)
    <tr>
      <th scope="row">{{$km_cutting->serial_number}}</th>
      <td>{{$km_cutting->tipe}}</td>
      <td>{{$km_cutting ->merk_mesin}}</td>
      <td>{{$km_cutting ->bagian}}</td>
      <td>{{$km_cutting ->tahun_pembelian}}</td>
      <td>{{$km_cutting ->jenis_sparepart_yang_diganti}}</td>
      <td>{{$km_cutting ->tanggal_sparepart_diganti}}</td>
      <td>{{$km_cutting ->harga_sparepart}}</td>
      <td><a class="btn btn-info" href="/showkmcutting/{{$km_cutting ->serial_number}}" role="button">Details</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
</body>
</html>