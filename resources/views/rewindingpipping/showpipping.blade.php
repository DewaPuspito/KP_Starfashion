<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <nav class="navbar navbar-dark bg-primary">
    <div class="container-fluid">
    <a class="navbar-brand" href="/pipping">Checklist Mesin</a>
    <img src="/images/logo.jpg" alt="Logo Starfashion" width="100" height="24">
    </div>
  </div>
</nav>
<title>Checklist Mesin</title>
  </head>
  <body>
  <h1><center>Rewinding Pipping<center></h1>
<div class="card" style="margin:20px;">
  <div class="card-header">Details</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Serial Number : {{ $data_pipping ->serial_number }}</h5>
        <p class="card-text">Tipe : {{ $data_pipping ->tipe }}</p>
        <p class="card-text">Label : {{ $data_pipping ->label }}</p>
        <p class="card-text">Merk Mesin : {{ $data_pipping ->merk_mesin }}</p>
        <p class="card-text">Bagian : {{ $data_pipping ->bagian }}</p>
        <p class="card-text">Tahun : {{ $data_pipping->tahun }}</p>
        <p class="card-text">Pengecekan Roll Press (Bulanan) : {{ $data_pipping ->pengecekan_rollpress_bulanan }}</p>
        <p class="card-text">Pengecekan Counter (Bulanan) : {{ $data_pipping ->pengecekan_counter_bulanan }}</p>
        <p class="card-text">Pengecekan Pisau Potong (Bulanan): {{ $data_pipping ->pengecekan_pisau_potong_bulanan }}</p>
        <p class="card-text">Pengecekan Motor Penggerak (Bulanan) : {{ $data_pipping ->pengecekan_motor_penggerak_bulanan }}</p>
        <p class="card-text">Pengecekan Motor Kompresor (Bulanan) : {{ $data_pipping ->pengecekan_motor_kompresor_bulanan }}</p>
        <p class="card-text">Check Kondisi Rantai (Bulanan) : {{ $data_pipping ->check_kondisi_rantai_bulanan }}</p>
        <p class="card-text">Check Instalasi Electrical dan Sensor (Bulanan) : {{ $data_pipping ->check_instalasi_electrical_dan_sensor_bulanan }}</p>
        <p class="card-text">Komponen Lainnya (Bulanan) : {{ $data_pipping ->komponen_lainnya_bulanan }}</p>
        <p class="card-text">Kebersihan Mesin (Bulanan) : {{ $data_pipping ->kebersihan_mesin_bulanan }}</p>
        <p class="card-text">Dicek Tanggal: {{ $data_pipping ->dicek_tanggal }}</p>
        <p class="card-text">Tahun Pembelian : {{ $data_pipping ->tahun_pembelian }}</p>
        <p class="card-text">Perbaikan Roll Press (Harian) : {{ $data_pipping ->perbaikan_rollpress_harian }}</p>
        <p class="card-text">Ganti Counter (Harian): {{ $data_pipping ->ganti_counter_harian }}</p>
        <p class="card-text">Ganti Pisau Potong (Harian) : {{ $data_pipping ->ganti_pisau_potong_harian }}</p>
        <p class="card-text">Ganti Motor Penggerak (Harian) : {{ $data_pipping ->ganti_motor_penggerak_harian }}</p>
        <p class="card-text">Perbaikan Motor Kompresor (Harian) : {{ $data_pipping ->perbaikan_motor_kompresor_harian }}</p>
        <p class="card-text">Perbaikan Grease pada Roller (Harian) : {{ $data_pipping ->perbaikan_grease_pada_roller_harian }}</p>
        <p class="card-text">Perbaikan Emergency Auto Stop (Harian): {{ $data_pipping ->gperbaikan_emergency_autostop_harian }}</p>
        <p class="card-text">Komponen Lainnya (Harian): {{ $data_pipping ->komponen_lainnya_harian }}</p>
        <p class="card-text">Kebersihan Mesin (Harian): {{ $data_pipping ->kebersihan_mesin_harian }}</p>
        <p class="card-text">Jenis Sparepart yang Diganti: {{$data_pipping->jenis_sparepart_yang_diganti}}</p>
        <p class="card-text">Harga Sparepart: {{$data_pipping->harga_sparepart}}</p>
        <div class= text-center>
        <td><a class="btn btn-warning" href="/tampilpipping/{{$data_pipping->serial_number}}" role="button">Edit</a>
        <a class="btn btn-danger" href="/deletepipping/{{$data_pipping->serial_number}}" role="button">Delete</a></td>
  </div>
    </hr>
  </div>
</div>