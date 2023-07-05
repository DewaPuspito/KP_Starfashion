  <!doctype html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <nav class="navbar navbar-dark bg-primary">
      <div class="container-fluid">
      <a class="navbar-brand" href="/plotter">Checklist Mesin</a>
      <img src="/images/logo.jpg" alt="Logo Starfashion" width="100" height="24">
      </div>
    </div>
  </nav>
  <title>Checklist Mesin</title>
    </head>
    <body>
    <h1><center>Plotter Machine<center></h1>
  <div class="card" style="margin:20px;">
    <div class="card-header">Details</div>
          <div class="card-body">
          <h5 class="card-title">Serial Number : {{ $data_plotter->serial_number }}</h5>
          <p class="card-text">Tipe : {{ $data_plotter->tipe }}</p>
          <p class="card-text">Label : {{ $data_plotter->label }}</p>
          <p class="card-text">Merk Mesin : {{ $data_plotter->merk_mesin }}</p>
          <p class="card-text">Bagian : {{ $data_plotter->bagian }}</p>
          <p class="card-text">Tahun : {{ $data_plotter->tahun }}</p>
          <p class="card-text">Check Plotter Head (Bulanan) : {{ $data_plotter->check_plotter_head_bulanan }}</p>
          <p class="card-text">Check Stand Pole (Bulanan) : {{ $data_plotter->check_stand_pole_bulanan }}</p>
          <p class="card-text">Check Foot Bar (Bulanan): {{ $data_plotter->check_foot_bar_bulanan }}</p>
          <p class="card-text">Check Rolling Paper Role (Bulanan) : {{ $data_plotter->check_rolling_paper_pole_bulanan }}</p>
          <p class="card-text">Check Sending Paper Role (Bulanan) : {{ $data_plotter->check_sending_paper_pole_bulanan }}</p>
          <p class="card-text">Check Balancing Pole (Bulanan) : {{ $data_plotter->check_balancing_pole_bulanan }}</p>
          <p class="card-text">Check Puiling Pole (Bulanan) : {{ $data_plotter->check_puiling_pole_bulanan }}</p>
          <p class="card-text">Check Paper Roller Hoop (Bulanan) : {{ $data_plotter->check_paper_roller_hoop_bulanan }}</p>
          <p class="card-text">Check Connection Cable (Bulanan) : {{ $data_plotter->check_connection_cable_bulanan }}</p>
          <p class="card-text">Check Print Head (Bulanan) : {{ $data_plotter->check_print_head_bulanan }}</p>
          <p class="card-text">Check Kebersihan (Bulanan) : {{ $data_plotter->check_kebersihan_bulanan }}</p>
          <p class="card-text">Dicek Tanggal: {{ $data_plotter->dicek_tanggal }}</p>
          <p class="card-text">Tahun Pembelian : {{ $data_plotter->tahun_pembelian }}</p>
          <p class="card-text">Perbaikan Plotter Head (Harian) : {{ $data_plotter->perbaikan_plotter_head_harian }}</p>
          <p class="card-text">Perbaikan Stand Pole (Harian): {{ $data_plotter->perbaikan_stand_pole_harian }}</p>
          <p class="card-text">Perbaikan Foot Bar (Harian) : {{ $data_plotter->perbaikan_foot_bar_harian }}</p>
          <p class="card-text">Perbaikan Rolling Paper Role (Harian) : {{ $data_plotter->perbaikan_rolling_paper_role_harian }}</p>
          <p class="card-text">Perbaikan Sending Paper Role (Harian) : {{ $data_plotter->perbaikan_sending_paper_role_harian }}</p>
          <p class="card-text">Perbaikan Balancing Pole (Harian) : {{ $data_plotter->perbaikan_balancing_pole_harian }}</p>
          <p class="card-text">Perbaikan Puiling Pole (Harian): {{ $data_plotter->perbaikan_puiling_pole_harian }}</p>
          <p class="card-text">Perbaikan Paper Roller Hoop (Harian): {{ $data_plotter->perbaikan_paper_roller_hoop_harian }}</p>
          <p class="card-text">Perbaikan Connection Cable (Harian) : {{ $data_plotter->perbaikan_connection_cable_harian}}</p>
          <p class="card-text">Perbaikan/Ganti Print Head (Harian) : {{ $data_plotter->perbaikan_ganti_print_head_harian }}</p>
          <p class="card-text">Kebersihan Mesin (Harian) : {{ $data_plotter->kebersihan_mesin_harian}}</p>
          <p class="card-text">Jenis Sparepart yang Diganti : {{ $data_plotter->perbaikan_ganti_print_head_harian }}</p>
          <p class="card-text">Harga Sparepart : {{$data_plotter->harga_sparepart}}</p>
          <div class=text-center>
          <td><a class="btn btn-warning" href="/tampilplotter/{{$data_plotter->serial_number}}" role="button">Edit</a>
          <a class="btn btn-danger" href="/deleteplotter/{{$data_plotter->serial_number}}" role="button">Delete</a></td>
    </div>
      </hr>
    </div>
  </div>