<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <nav class="navbar navbar-dark bg-primary">
    <div class="container-fluid">
    <a class="navbar-brand" href="/fuse">Checklist Mesin</a>
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
<form action="/insertfuse" method="POST" enctype="multipart/form-data">
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
      <label for="Input" class="form-label">Check Belt Atas (Bulanan)</label>
      <input type="text" name="check_belt_atas_bulanan" class="form-control"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Belt Bawah (Bulanan)</label>
      <input type="text" name="check_belt_bawah_bulanan" class="form-control">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Tension Belt Atas (Bulanan)</label>
      <input type="text" name="tension_belt_atas_bulanan" class="form-control"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Tension Belt Bawah (Bulanan)</label>
      <input type="text" name="tension_belt_bawah_bulanan" class="form-control">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Bearing Tekanan Belt Atas (Bulanan)</label>
      <input type="text" name="bearing_tekanan_belt_atas_bulanan" class="form-control">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Bearing Tekanan Belt Bawah (Bulanan)</label>
      <input type="text" name="bearing_tekanan_belt_bawah_bulanan" class="form-control">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Kondisi Roll Press Atas (Bulanan)</label>
      <input type="text" name="check_kondisi_rollpress_atas_bulanan" class="form-control">
      </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Kondisi Roll Press Bawah (Bulanan)</label>
      <input type="text" name="check_kondisi_rollpress_bawah_bulanan" class="form-control">
      </div>
      <div class="mb-3">
    <label for="Input" class="form-label">Check Switch Control Belt (Bulanan)</label>
    <input type="text" name="check_switchkontrol_belt_bulanan" class="form-control"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Kontrol Speed (Bulanan)</label>
      <input type="text" name="check_kontrol_speed_bulanan" class="form-control">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Kontrol Temperatur (Bulanan)</label>
      <input type="text" name="check_kontrol_temperatur_bulanan" class="form-control">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Komponen Lainnya (Bulanan)</label>
      <input type="text" name="komponen_lainnya_bulanan" class="form-control">
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
      <label for="Input" class="form-label">Ganti Belt Atas (Harian)</label>
      <input type="date" name="ganti_belt_atas_harian" class="form-control"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Ganti Belt Bawah (Harian)</label>
      <input type="date" name="ganti_belt_bawah_harian" class="form-control">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Perbaikan Tension Belt Atas (Harian)</label>
      <input type="date" name="perbaikan_tension_belt_atas_harian" class="form-control"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Perbaikan Tension Belt Bawah (Harian)</label>
      <input type="date" name="perbaikan_tension_belt_bawah_harian" class="form-control">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Ganti Bearing Tekanan Belt Atas (Harian)</label>
      <input type="date" name="ganti_bearing_tekanan_belt_atas_harian" class="form-control">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Ganti Bearing Tekanan Belt Bawah (Harian)</label>
      <input type="date" name="ganti_bearing_tekanan_belt_bawah_harian" class="form-control">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Ganti Roll Press Atas (Harian)</label>
      <input type="date" name="ganti_rollpress_atas_harian" class="form-control">
      </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Ganti Roll Press Bawah (Harian)</label>
      <input type="date" name="ganti_rollpress_bawah_harian" class="form-control">
      </div>
      <div class="mb-3">
    <label for="Input" class="form-label">Ganti Switch Control Belt (Harian)</label>
    <input type="date" name="ganti_switchkontrol_belt_harian" class="form-control"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Ganti Kontrol Speed  (Harian)</label>
      <input type="date" name="ganti_kontrol_speed_harian" class="form-control">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Ganti Kontrol Temperatur (Harian)</label>
      <input type="date" name="ganti_kontrol_temperatur_harian" class="form-control">
    </div>
    <label for="Input" class="form-label">Servis dan Bersihkan Mesin (Harian)</label>
    <input type="date" name="servis_dan_bersihkan_mesin_harian" class="form-control"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Komponen Lainnya (Harian)</label>
      <input type="date" name="komponen_lainnya_harian" class="form-control">
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
    <div class= text-center>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</body>
</html>
