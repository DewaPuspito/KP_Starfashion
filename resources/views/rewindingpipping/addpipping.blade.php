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
    <h1><center>Add Item<center></h1>
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-6">
    <div class="card">
    <div class="card-body">
<form action="/insertpipping" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="mb-3">
    <label for="Input" class="form-label">Serial Number</label>
    <input type="text" name="serial_number" class="form-control"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Tipe</label>
      <input type="text" name="tipe"  class="form-control">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Label</label>
      <input type="number" name="label" class="form-control">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Merk Mesin</label>
      <input type="text" name="merk_mesin" class="form-control">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Bagian</label>
      <input type="text" name="bagian" class="form-control">
      </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Tahun</label>
      <input type="year" name="tahun" class="form-control">
      </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Pengecekan Roll Press (Bulanan)</label>
      <input type="text" name="pengecekan_rollpress_bulanan" class="form-control"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Pengecekan Counter (Bulanan)</label>
      <input type="text" name="pengecekan_counter_bulanan" class="form-control">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Pengecekan Pisau Potong (Bulanan)</label>
      <input type="text" name="pengecekan_pisau_potong_bulanan" class="form-control"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Pengecekan Motor Penggerak (Bulanan)</label>
      <input type="text" name="pengecekan_motor_penggerak_bulanan" class="form-control">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Pengecekan Motor Kompresor (Bulanan)</label>
      <input type="text" name="pengecekan_motor_kompresor_bulanan" class="form-control">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Kondisi Rantai (Bulanan)</label>
      <input type="text" name="check_kondisi_rantai_bulanan" class="form-control">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Instalasi Electrical dan Sensor (Bulanan)</label>
      <input type="text" name="check_instalasi_electrical_dan_sensor_bulanan" class="form-control">
      </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Komponen Lainnya (Bulanan)</label>
      <input type="text" name="komponen_lainnya_bulanan" class="form-control">
      </div>
      <div class="mb-3">
    <label for="Input" class="form-label">Kebersihan Mesin (Bulanan)</label>
    <input type="text" name="kebersihan_mesin_bulanan" class="form-control"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Dicek Tanggal</label>
      <input type="date" name="dicek_tanggal" class="form-control">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Tahun Pembelian</label>
      <input type="year" name="tahun_pembelian" class="form-control">
      </div>
      <div class="mb-3">
      <label for="Input" class="form-label">Perbaikan Roll Press (Harian)</label>
      <input type="date" name="perbaikan_rollpress_harian" class="form-control"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Ganti Counter (Harian)</label>
      <input type="date" name="ganti_counter_harian" class="form-control">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Ganti Pisau Potong (Harian)</label>
      <input type="date" name="ganti_pisau_potong_harian" class="form-control">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Ganti Motor Penggerak (Harian)</label>
      <input type="date" name="ganti_motor_penggerak_harian" class="form-control">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Perbaikan Motor Kompresor (Harian)</label>
      <input type="date" name="perbaikan_motor_kompresor_harian" class="form-control">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Perbaikan Grease pada Roller (Harian)</label>
      <input type="date" name="perbaikan_grease_pada_roller_harian" class="form-control">
      </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Perbaikan Emergency Auto Stop (Harian)</label>
      <input type="date" name="perbaikan_emergency_autostop_harian" class="form-control">
      </div>
      <div class="mb-3">
    <label for="Input" class="form-label">Komponen Lainnya (Harian)</label>
    <input type="date" name="komponen_lainnya_harian" class="form-control"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Kebersihan Mesin (Harian)</label>
      <input type="date" name="kebersihan_mesin_harian" class="form-control">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Jenis Sparepart yang Diganti</label>
      <input type="text" name="jenis_sparepart_yang_diganti" class="form-control">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Tanggal Sparepart Diganti</label>
      <input type="date" name="tanggal_sparepart_diganti" class="form-control">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Harga Sparepart</label>
      <input type="number" name="harga_sparepart" class="form-control">
    </div>
    <div class=text-center>
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
</div>
</div>
</body>
</html>
