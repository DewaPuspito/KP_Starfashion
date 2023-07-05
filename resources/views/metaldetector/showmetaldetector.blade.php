<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <nav class="navbar navbar-dark bg-primary">
    <div class="container-fluid">
    <a class="navbar-brand" href="/metal-detector">Checklist Mesin</a>
    <img src="/images/logo.jpg" alt="Logo Starfashion" width="100" height="24">
    </div>
  </div>
</nav>
<title>Checklist Mesin</title>
  </head>
  <body>
  <h1><center>Metal Detector<center></h1>
<div class="card" style="margin:20px;">
  <div class="card-header">Details</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Serial Number : {{ $data_metaldetector ->serial_number }}</h5>
        <p class="card-text">Tipe : {{ $data_metaldetector ->tipe }}</p>
        <p class="card-text">Label : {{ $data_metaldetector ->label }}</p>
        <p class="card-text">Merk Mesin : {{ $data_metaldetector ->merk_mesin }}</p>
        <p class="card-text">Bagian : {{ $data_metaldetector ->bagian }}</p>
        <p class="card-text">Tahun : {{ $data_metaldetector ->tahun }}</p>
        <p class="card-text">Check Instalasi Electrical (Bulanan) : {{ $data_metaldetector ->check_instalasi_electrical_bulanan}}</p>
        <p class="card-text">Check Switch Auto Stop (Bulanan) : {{ $data_metaldetector ->check_switch_auto_stop_bulanan }}</p>
        <p class="card-text">Check Belt (Bulanan): {{ $data_metaldetector ->check_belt_bulanan }}</p>
        <p class="card-text">Check Dinamo Motor (Bulanan) : {{ $data_metaldetector ->check_dinamo_motor_bulanan }}</p>
        <p class="card-text">Check Sensifitas Metal (Bulanan) : {{ $data_metaldetector ->check_sensitifitas_metal_bulanan }}</p>
        <p class="card-text">Check Spare Parts Lainnya (Bulanan) : {{ $data_metaldetector ->check_spare_parts_lainnya_bulanan }}</p>
        <p class="card-text">Kebersihan Mesin (Bulanan) : {{ $data_metaldetector ->kebersihan_mesin_bulanan }}</p>
        <p class="card-text">Dicek Tanggal: {{ $data_metaldetector ->dicek_tanggal }}</p>
        <p class="card-text">Tahun Pembelian : {{ $data_metaldetector ->tahun_pembelian }}</p>
        <p class="card-text">Perbaikan Instalasi Electrical (Harian) : {{ $data_metaldetector ->perbaikan_instalasi_electrical_harian }}</p>
        <p class="card-text">>Perbaikan Switch Auto Stop (Harian): {{ $data_metaldetector ->perbaikan_switch_auto_stop_harian }}</p>
        <p class="card-text">Perbaikan Belt (Harian) : {{ $data_metaldetector ->perbaikan_belt_harian }}</p>
        <p class="card-text">Perbaikan Dinamo Motor (Harian) : {{ $data_metaldetector ->perbaikan_dinamo_motor_harian }}</p>
        <p class="card-text">Perbaikan Sensifitas Metal (Harian) : {{ $data_metaldetector ->perbaikan_sensitifitas_metal_harian }}</p>
        <p class="card-text">Check Spare Parts Lainnya (Harian) : {{ $data_metaldetector ->check_spareparts_lainnya_harian }}</p>
        <p class="card-text">Kebersihan Mesin (Harian): {{ $data_metaldetector ->kebersihan_mesin_harian }}</p>
        <p class="card-text">Jenis Sparepart yang Diganti : {{$data_metaldetector->jenis_sparepart_yang_diganti}}</p>
        <p class="card-text">Harga Sparepart : {{$data_metaldetector->harga_sparepart}}</p>
        <div class=text-center>
        <td><a class="btn btn-warning" href="/tampilmetaldetector/{{$data_metaldetector ->serial_number}}" role="button">Edit</a>
        <a class="btn btn-danger" href="/deletemetaldetector/{{$data_metaldetector ->serial_number}}" role="button">Delete</a></td>
  </div>
    </hr>
  </div>
</div>