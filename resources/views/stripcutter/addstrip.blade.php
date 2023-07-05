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
    <h1><center>Add Item<center></h1>
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-6">
    <div class="card">
    <div class="card-body">
<form action="/insertstrip" method="POST" enctype="multipart/form-data">
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
      <label for="Input" class="form-label">Check Pisau Potong (Bulanan)</label>
      <input type="text" name="check_pisau_potong_bulanan" class="form-control"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Asahan (Bulanan)</label>
      <input type="text" name="check_asahan_bulanan" class="form-control">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Fungsi Jalur Air Asahan (Bulanan)</label>
      <input type="text" name="check_fungsi_jalur_air_asahan_bulanan" class="form-control"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Sensor (Bulanan)</label>
      <input type="text" name="check_sensor_bulanan" class="form-control">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Motor Vakum (Bulanan)</label>
      <input type="text" name="check_motor_vakum_bulanan" class="form-control">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Kondisi Vanbelt Penggerak (Bulanan)</label>
      <input type="text" name="check_kondisi_vanbelt_penggerak_bulanan" class="form-control">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Instalasi Electrical (Bulanan)</label>
      <input type="text" name="check_instalasi_elektrikal_bulanan" class="form-control">
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
      <label for="Input" class="form-label">Ganti Asahan (Harian)</label>
      <input type="date" name="ganti_asahan_harian" class="form-control">
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
      <label for="Input" class="form-label">Ganti Motor Vakum (Harian)</label>
      <input type="date" name="perbaikan_motor_vakum_harian" class="form-control">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Perbaikan Grease pada Roller (Harian)</label>
      <input type="date" name="pemberian_grease_pada_roller_harian" class="form-control">
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
