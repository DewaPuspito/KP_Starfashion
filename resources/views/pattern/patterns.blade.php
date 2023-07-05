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
    <h1><center>Cutter Pattern<center></h1>  
    <div class="container">
    <a class="btn btn-success" href="/addpattern" role="button">Add Item</a>
    <div class="row g-3 align-items-center mt-2">
    <div class="col-auto">
    <label for="input" class="col-form-label">Search Here</label>
    </div>
    <div class="col-auto">
    <form action="/pattern" method='GET'>
      <input type="search" name="search" class="form-control" aria-describedby="passwordHelpInline">
    </form>
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
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data_pattern as $pattern)
    <tr>
      <th scope="row">{{$pattern->serial_number}}</th>
      <td>{{$pattern->tipe}}</td>
      <td>{{$pattern ->merk_mesin}}</td>
      <td>{{$pattern ->bagian}}</td>
      <td>{{$pattern ->tahun_pembelian}}</td>
      <td><a class="btn btn-info" href="/showpattern/{{$pattern ->serial_number}}" role="button">Details</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
</body>
</html>