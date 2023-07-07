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
    <h1><center>Sparepart<center></h1>  
    <div class="container">
    <div class="row g-3 align-items-center mt-2 mb-3">
    <div class="col-auto">
    <a class="btn btn-success" href="/addsparepart" role="button">Add Item</a>
    </div>
      <div class="col-auto">
        <a class="btn btn-success" href="/exportsparepart" role="button">Export Excel</a>
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
      <th scope="col">ID Sparepart</th>
      <th scope="col">Nama Sparepart</th>
      <th scope="col">Harga Sparepart</th>
      <th scope="col">Tanggal Masuk</th>
      <th scope="col">Tanggal Keluar</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data_sparepart as $sparepart )
    <tr>
      <th scope="row">{{$sparepart->id_sparepart}}</th>
      <td>{{$sparepart ->nama_sparepart}}</td>
      <td>{{$sparepart ->harga_sparepart}}</td>
      <td>{{$sparepart ->sparepart_masuk}}</td>
      <td>{{$sparepart ->sparepart_keluar}}</td>
      <td><a class="btn btn-warning" href="/tampilsparepart/{{$sparepart->id_sparepart}}" role="button">Edit</a>
      <a class="btn btn-danger" href="/deletesparepart/{{$sparepart->id_sparepart}}" role="button">Delete</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
</body>
</html>