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
    <h1><center>Warehouse Mechanic<center></h1>  
    <div class="container">
    <a class="btn btn-success" href="/addwarehouse" role="button">Add Item</a>
    <form action="/search" method="GET">
    <div class="row g-3 align-items-center mt-2 mb-3">
        <div class="col-auto">
            <label for="search" class="col-form-label">Search by:</label>
        </div>
        <div class="col-auto">
            <select name="searchType" id="searchType" class="form-control">
                <option value="serial_number">Serial Number</option>
                <option value="type">Tipe</option>
                <option value="jenis">Jenis Mesin</option>
                <option value="sparepart-diganti">Sparepart Diganti</option>
            </select>
        </div>
        <div class="col-auto">
            <input type="search" name="search" id="search" class="form-control" aria-describedby="searchHelpInline">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary">Search</button>
        </div>
    </div>
</form>
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
      <th scope="col">Jenis Mesin</th>
      <th scope="col">Merk Mesin</th>
      <th scope="col">Tahun Pembelian</th>
      <th scope="col">Jenis Sparepart yang Diganti</th>
      <th scope="col">Harga Sparepart</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data_warehouse as $warehouse )
    <tr>
      <th scope="row">{{$warehouse->serial_number}}</th>
      <td>{{$warehouse ->tipe}}</td>
      <td>{{$warehouse ->jenis_mesin}}</td>
      <td>{{$warehouse ->merk_mesin}}</td>
      <td>{{$warehouse ->tahun_pembelian}}</td>
      <td>{{$warehouse ->jenis_sparepart_yang_diganti}}</td>
      <td>{{$warehouse ->harga_sparepart}}</td>
      <td><a class="btn btn-info" href="/showwarehouse/{{$warehouse->serial_number}}" role="button">Details</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
</body>
</html>