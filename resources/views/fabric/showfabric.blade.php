<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <nav class="navbar navbar-dark bg-primary">
    <div class="container-fluid">
    <a class="navbar-brand" href="/fabric">Checklist Mesin</a>
    <img src="/images/logo.jpg" alt="Logo Starfashion" width="100" height="24">
    </div>
  </div>
</nav>
<title>Checklist Mesin</title>
  </head>
  <body>
  <h1><center>Fabric Warehouse<center></h1>
<div class="card" style="margin:20px;">
  <div class="card-header">Details</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Serial Number : {{ $data_fabric ->serial_number }}</h5>
        <p class="card-text">Tipe : {{ $data_fabric ->tipe }}</p>
        <p class="card-text">Label : {{ $data_fabric ->label }}</p>
        <p class="card-text">Merk Mesin : {{ $data_fabric ->merk_mesin }}</p>
        <p class="card-text">Bagian : {{ $data_fabric ->bagian }}</p>
        <p class="card-text">Tahun : {{ $data_fabric->tahun }}</p>
        <p class="card-text">Check Gear Box (Bulanan) : {{ $data_fabric ->check_gear_box_bulanan }}</p>
        <p class="card-text">Ganti Oli Gear Box (Bulanan) : {{ $data_fabric ->ganti_oli_gear_box_bulanan }}</p>
        <p class="card-text">Check Tegangan Rantai (Bulanan): {{ $data_fabric ->check_tegangan_rantai_bulanan }}</p>
        <p class="card-text">Check Electrical dan Motor (Bulanan) : {{ $data_fabric ->check_electrical_dan_motor_bulanan }}</p>
        <p class="card-text">Kebersihan Mesin (Bulanan) : {{ $data_fabric ->kebersihan_mesin_bulanan }}</p>
        <p class="card-text">Pemberian Grease pada Roller (Bulanan) : {{ $data_fabric ->pemberian_grease_pada_roller_bulanan }}</p>
        <p class="card-text">Komponen Lainnya (Bulanan) : {{ $data_fabric ->komponen_lainnya_bulanan }}</p>  
        <p class="card-text">Dicek Tanggal: {{ $data_fabric ->dicek_tanggal }}</p>
        <p class="card-text">Tahun Pembelian : {{ $data_fabric ->tahun_pembelian }}</p>
        <p class="card-text">Perbaikan Gear Box (Harian) : {{ $data_fabric ->perbaikan_gear_box_harian }}</p>
        <p class="card-text">Ganti Oli Gear Box (Harian): {{ $data_fabric ->ganti_oli_gear_box_harian}}</p>
        <p class="card-text">Perbaikan Tegangan Rantai (Harian) : {{ $data_fabric ->perbaikan_tegangan_rantai_harian }}</p>
        <p class="card-text">Perbaikan Electrical dan Motor (Harian) : {{ $data_fabric ->perbaikan_electrical_dan_motor_harian }}</p>
        <p class="card-text">Kebersihan Mesin (Harian) : {{ $data_fabric ->kebersihan_mesin_harian }}</p>
        <p class="card-text">Pemberian Grease pada Roller (Harian) : {{ $data_fabric ->pemberian_grease_pada_roller_harian }}</p>
        <p class="card-text">Ganti Karet Roller (Harian) : {{ $data_fabric ->penggantian_karet_roller_harian}}</p>
        <p class="card-text">Komponen Lainnya (Harian) : {{ $data_fabric ->komponen_lainnya_harian}}</p>
        <p class="card-text">Jenis Sparepart yang Diganti : {{ $data_fabric ->jenis_sparepart_yang_diganti}}</p>
        <p class="card-text">Harga Sparepart : {{ $data_fabric ->harga_sparepart}}</p>
        <div class= text-center>
        <td><a class="btn btn-warning" href="/tampilfabric/{{$data_fabric->serial_number}}" role="button">Edit</a>
        <a class="btn btn-danger" href="/deletefabric/{{$data_fabric->serial_number}}" role="button">Delete</a></td>
  </div>
    </hr>
  </div>
</div>