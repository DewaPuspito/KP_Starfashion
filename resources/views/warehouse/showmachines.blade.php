<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <nav class="navbar navbar-dark bg-primary">
    <div class="container-fluid">
    <a class="navbar-brand" href="/warehouse">Checklist Mesin</a>
    <img src="/images/logo.jpg" alt="Logo Starfashion" width="100" height="24">
    </div>
  </div>
</nav>
<title>Checklist Mesin</title>
  </head>
  <body>
  <h1><center>Sewing Line and Sample Machines<center></h1>
<div class="card" style="margin:20px;">
  <div class="card-header">Details</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Serial Number : {{ $data_warehouse->serial_number }}</h5>
        <p class="card-text">Tipe : {{ $data_warehouse ->tipe }}</p>
        <p class="card-text">Label : {{ $data_warehouse ->label }}</p>
        <p class="card-text">Jenis Mesin : {{ $data_warehouse ->jenis_mesin }}</p>
        <p class="card-text">Merk Mesin : {{ $data_warehouse ->merk_mesin }}</p>
        <p class="card-text">Bagian : {{ $data_warehouse ->bagian }}</p>
        <p class="card-text">Tahun : {{ $data_warehouse->tahun }}</p>
        <p class="card-text">Check Bobbin Case (Bulanan) : {{ $data_warehouse ->check_bobin_chase_bulanan }}</p>
        <p class="card-text">Needle Guard (Bulanan) : {{ $data_warehouse ->needle_guard_bulanan }}</p>
        <p class="card-text">Check Belt Cover (Bulanan): {{ $data_warehouse ->check_belt_cover_bulanan }}</p>
        <p class="card-text">Check Wheels Machine (Bulanan) : {{ $data_warehouse ->check_wheels_machine_bulanan }}</p>
        <p class="card-text">Check Dinamo Guard (Bulanan) : {{ $data_warehouse ->check_dinamo_guard_bulanan }}</p>
        <p class="card-text">Cleanliness (Bulanan) : {{ $data_warehouse ->cleanliness_bulanan }}</p>
        <p class="card-text">Check Oli (Bulanan) : {{ $data_warehouse ->check_oil_bulanan}}</p>
        <p class="card-text">Check Menggunakan Magnet Pen (Bulanan) : {{ $data_warehouse ->check_magnet_pen_bulanan }}</p>
        <p class="card-text">Ganti Oli (Bulanan) : {{ $data_warehouse ->replace_oil_bulanan }}</p>
        <p class="card-text">Check Bak Mesin (Bulanan) : {{ $data_warehouse ->check_bak_mesin_bulanan }}</p>
        <p class="card-text">Check Tiang Benang (Bulanan) : {{ $data_warehouse ->check_tiang_benang_bulanan }}</p>
        <p class="card-text">Check Spring Tension (Bulanan) : {{ $data_warehouse ->check_spring_tension_bulanan }}</p>
        <p class="card-text">Check Jalur Benang (Bulanan) : {{ $data_warehouse ->check_jalur_benang_bulanan }}</p>
        <p class="card-text">Terakhir Dicek: {{ $data_warehouse ->dicek_tanggal }}</p>
        <p class="card-text">Tahun Pembelian : {{ $data_warehouse ->tahun_pembelian }}</p>
        <p class="card-text">Jahitan Loncat (Harian) : {{ $data_warehouse ->jahitan_loncat_harian }}</p>
        <p class="card-text">Benang Putusan (Harian): {{ $data_warehouse ->benang_putusan_harian }}</p>
        <p class="card-text">Ganti Gunting/Pisau (Harian) : {{ $data_warehouse ->ganti_gunting_pisau_harian }}</p>
        <p class="card-text">Ganti Rotary (Harian) : {{ $data_warehouse ->ganti_rotary_harian }}</p>
        <p class="card-text">Ganti Suttel Hook (Harian) : {{ $data_warehouse ->ganti_suttel_hook_harian }}</p>
        <p class="card-text">Gulungan Spull (Harian) : {{ $data_warehouse ->gulungan_spull_harian }}</p>
        <p class="card-text">Ganti Needle Plate (Harian): {{ $data_warehouse ->ganti_needle_plate_harian }}</p>
        <p class="card-text">Setel Timming (Harian): {{ $data_warehouse ->setel_timming_harian }}</p>
        <p class="card-text">Bersihkan Bak Mesin (Harian) : {{ $data_warehouse ->bersihkan_bak_mesin_harian}}</p>
        <p class="card-text">Pisau Tidak Motong (Harian) : {{ $data_warehouse ->pisau_tidak_motong_harian }}</p>
        <p class="card-text">Cek Angin Kompresor (Harian) : {{ $data_warehouse ->cek_angin_kompresor_harian}}</p>
        <p class="card-text">Kebersihan Mesin (Harian) : {{ $data_warehouse ->kebersihan_mesin_harian}}</p>
        <p class="card-text">Cek Kondisi Minyak Mesin (Harian) : {{ $data_warehouse ->cek_kondisi_minyak_mesin_harian }}</p>
        <p class="card-text">Ganti Sparepart Lainnya (Harian) : {{ $data_warehouse ->ganti_sparepart_lainnya_harian }}</p>
        <p class="card-text">Jenis Sparepart yang Diganti : {{ $data_warehouse ->jenis_sparepart_yang_diganti }}</p>
        <p class="card-text">Harga Sparepart : {{ $data_warehouse ->harga_sparepart }}</p>
        <div class= text-center>
        <td><a class="btn btn-warning" href="/tampilwarehouse/{{$data_warehouse->serial_number}}" role="button">Edit</a>
        <a class="btn btn-danger" href="/deletewarehouse/{{$data_warehouse->serial_number}}" role="button">Delete</a></td>
  </div>
    </hr>
  </div>
</div>