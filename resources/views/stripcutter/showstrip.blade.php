<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <nav class="navbar navbar-dark bg-primary">
    <div class="container-fluid">
    <a class="navbar-brand" href="/strip">Checklist Mesin</a>
    <img src="/images/logo.jpg" alt="Logo Starfashion" width="100" height="24">
    </div>
  </div>
</nav>
<title>Checklist Mesin</title>
  </head>
  <body>
  <h1><center>Strip Cutter<center></h1>
<div class="card" style="margin:20px;">
  <div class="card-header">Details</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Serial Number : {{ $data_strip->serial_number }}</h5>
        <p class="card-text">Tipe : {{ $data_strip ->tipe }}</p>
        <p class="card-text">Label : {{ $data_strip ->label }}</p>
        <p class="card-text">Merk Mesin : {{ $data_strip ->merk_mesin }}</p>
        <p class="card-text">Bagian : {{ $data_strip ->bagian }}</p>
        <p class="card-text">Tahun : {{ $data_strip ->tahun }}</p>
        <p class="card-text">Check Pisau Potong (Bulanan) : {{ $data_strip ->check_pisau_potong_bulanan }}</p>
        <p class="card-text">Check Asahan (Bulanan) : {{ $data_strip ->check_asahan_bulanan }}</p>
        <p class="card-text">Check Fungsi Jalur Air Asahan (Bulanan): {{ $data_strip ->check_fungsi_jalur_air_asahan_bulanan }}</p>
        <p class="card-text">Check Sensor (Bulanan) : {{ $data_strip ->check_sensor_bulanan }}</p>
        <p class="card-text">Check Motor Vakum (Bulanan) : {{ $data_strip ->check_motor_vakum_bulanan }}</p>
        <p class="card-text">Check Kondisi Vanbelt Penggerak (Bulanan) : {{ $data_strip ->check_kondisi_vanbelt_penggerak_bulanan }}</p>
        <p class="card-text">Check Instalasi Electrical (Bulanan) : {{ $data_strip ->check_instalasi_elektrikal_bulanan}}</p>
        <p class="card-text">Komponen Lainnya (Bulanan) : {{ $data_strip ->komponen_lainnya_bulanan }}</p>
        <p class="card-text">Kebersihan Mesin (Bulanan) : {{ $data_strip ->kebersihan_mesin_bulanan }}</p>
        <p class="card-text">Dicek Tanggal: {{ $data_strip ->dicek_tanggal }}</p>
        <p class="card-text">Tahun Pembelian : {{ $data_strip ->tahun_pembelian }}</p>
        <p class="card-text">Perbaikan Roll Press (Harian) : {{ $data_strip ->perbaikan_rollpress_harian }}</p>
        <p class="card-text">Ganti Asahan (Harian): {{ $data_strip ->ganti_asahan_harian }}</p>
        <p class="card-text">Ganti Pisau Potong (Harian) : {{ $data_strip ->ganti_pisau_potong_harian }}</p>
        <p class="card-text">Ganti Motor Penggerak (Harian) : {{ $data_strip ->ganti_motor_penggerak_harian }}</p>
        <p class="card-text">Ganti Motor Vakum (Harian) : {{ $data_strip ->perbaikan_motor_vakum_harian }}</p>
        <p class="card-text">Perbaikan Grease pada Roller (Harian) : {{ $data_strip ->pemberian_grease_pada_roller_harian }}</p>
        <p class="card-text">Perbaikan Emergency Auto Stop (Harian): {{ $data_strip ->perbaikan_emergency_autostop_harian }}</p>
        <p class="card-text">Komponen Lainnya (Harian): {{ $data_strip ->komponen_lainnya_harian }}</p>
        <p class="card-text">Bersihkan Bak Mesin (Harian) : {{ $data_strip ->kebersihan_mesin_harian}}</p>
        <p class="card-text">Jenis Sparepart yang Diganti: {{$data_strip->jenis_sparepart_yang_diganti}}</p>
        <p class="card-text">Bersihkan Bak Mesin (Harian) : {{$data_strip->harga_sparepart}}</p>
        <div class= text-center>
        <td><a class="btn btn-warning" href="/tampilstrip/{{$data_strip->serial_number}}" role="button">Edit</a>
        <a class="btn btn-danger" href="/deletestrip/{{$data_strip->serial_number}}" role="button">Delete</a></td>
  </div>
    </hr>
  </div>
</div>