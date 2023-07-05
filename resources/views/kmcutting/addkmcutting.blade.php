<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <nav class="navbar navbar-dark bg-primary">
    <div class="container-fluid">
    <a class="navbar-brand" href="/km-cutting">Checklist Mesin</a>
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
<form action="/insertkmcutting" method="POST" enctype="multipart/form-data">
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
      <label for="Input" class="form-label">Automatic Cut Out Switch (Bulanan)</label>
      <input type="text" name="automatic_cutout_switch_bulanan" class="form-control"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Insulate Plate (Bulanan)</label>
      <input type="text" name="insulate_plate_bulanan" class="form-control">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Oil Tank (Bulanan)</label>
      <input type="text" name="oil_tank_bulanan" class="form-control"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Oil Tank Cap (Bulanan)</label>
      <input type="text" name="oil_tank_cap_bulanan" class="form-control">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">RH Guide (Bulanan)</label>
      <input type="text" name="rh_guide_bulanan" class="form-control">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">LH Guide (Bulanan)</label>
      <input type="text" name="lh_guide_bulanan" class="form-control">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Bellcrank with Pin and Bushing (Bulanan)</label>
      <input type="text" name="bellcrank_with_pin_and_bushing_bulanan" class="form-control">
      </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Gear and Shaft (Bulanan)</label>
      <input type="text" name="gear_and_shaft_bulanan" class="form-control">
      </div>
      <div class="mb-3">
    <label for="Input" class="form-label">Screwshaft LH RH Extension (Bulanan)</label>
    <input type="text" name="screwshaft_lh_rh_extension_bulanan" class="form-control"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">LH Square Shaft (Bulanan)</label>
      <input type="text" name="lh_square_shaft_bulanan" class="form-control">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Thread Guide (Bulanan)</label>
      <input type="text" name="thread_guide_bulanan" class="form-control">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Sparepart Lainnya (Bulanan)</label>
      <input type="text" name="sparepart_lainnya_bulanan" class="form-control">
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
      <label for="Input" class="form-label">Pisau Tumpul (Harian)</label>
      <input type="date" name="pisau_tumpul_harian" class="form-control"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Minyak Habis (Harian)</label>
      <input type="date" name="minyak_habis_harian" class="form-control">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Ganti Abrasif (Harian)</label>
      <input type="date" name="ganti_abrasif_harian" class="form-control"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Instalasi Kabel (Harian)</label>
      <input type="date" name="check_instalasi_kabel_harian" class="form-control">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Kebersihan Mesin (Harian)</label>
      <input type="date" name="kebersihan_mesin_harian" class="form-control">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Kondisi Mesin (Harian)</label>
      <input type="date" name="check_kondisi_mesin_harian" class="form-control">
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
    <div class=text-center>
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
</div>
</div>
</body>
</html>