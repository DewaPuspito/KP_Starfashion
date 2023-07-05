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
    <h1><center>Add Item<center></h1>
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-6">
    <div class="card">
    <div class="card-body">
<form action="/insertwarehouse" method="POST" enctype="multipart/form-data">
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
      <input type="number" name="label" class="form-control" id="Input">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Jenis Mesin</label>
      <input type="text" name="jenis_mesin" class="form-control" id="Input">
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
      <label for="Input" class="form-label">Check Bobbin Case (Bulanan)</label>
      <input type="text" name="check_bobin_chase_bulanan" class="form-control"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Needle Guard (Bulanan)</label>
      <input type="text" name="needle_guard_bulanan" class="form-control">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Belt Cover (Bulanan)</label>
      <input type="text" name="check_belt_cover_bulanan" class="form-control"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Wheels Machine (Bulanan)</label>
      <input type="text" name="check_wheels_machine_bulanan" class="form-control">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Dinamo Guard (Bulanan)</label>
      <input type="text" name="check_dinamo_guard_bulanan" class="form-control">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Cleanliness (Bulanan)</label>
      <input type="text" name="cleanliness_bulanan" class="form-control">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Oli (Bulanan)</label>
      <input type="text" name="check_oil_bulanan" class="form-control">
      </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Menggunakan Magnet Pen (Bulanan)</label>
      <input type="text" name="check_magnet_pen_bulanan" class="form-control">
      </div>
      <div class="mb-3">
    <label for="Input" class="form-label">Ganti Oli (Bulanan)</label>
    <input type="text" name="replace_oil_bulanan" class="form-control"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Bak Mesin (Bulanan)</label>
      <input type="text" name="check_bak_mesin_bulanan" class="form-control">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Tiang Benang (Bulanan)</label>
      <input type="text" name="check_tiang_benang_bulanan" class="form-control">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Spring Tension (Bulanan)</label>
      <input type="text" name="check_spring_tension_bulanan" class="form-control">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Jalur Benang (Bulanan)</label>
      <input type="text" name="check_jalur_benang_bulanan" class="form-control">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Terakhir Dicek</label>
      <input type="date" name="dicek_tanggal" class="form-control">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Tahun Pembelian</label>
      <input type="year" name="tahun_pembelian" class="form-control">
      </div>
      <div class="mb-3">
      <label for="Input" class="form-label">Jahitan Loncat (Harian)</label>
      <input type="date" name="jahitan_loncat_harian" class="form-control"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Benang Putusan (Harian)</label>
      <input type="date" name="benang_putusan_harian" class="form-control">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Ganti Gunting/Pisau (Harian)</label>
      <input type="date" name="ganti_gunting_pisau_harian" class="form-control"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Ganti Rotary (Harian)</label>
      <input type="date" name="ganti_rotary_harian" class="form-control">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Ganti Suttel Hook (Harian)</label>
      <input type="date" name="ganti_suttel_hook_harian" class="form-control">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Gulungan Spull (Harian)</label>
      <input type="date" name="gulungan_spull_harian" class="form-control">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Ganti Needle Plate (Harian)</label>
      <input type="date" name="ganti_needle_plate_harian" class="form-control">
      </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Setel Timming (Harian)</label>
      <input type="date" name="setel_timming_harian" class="form-control">
      </div>
      <div class="mb-3">
    <label for="Input" class="form-label">Bersihkan Bak Mesin (Harian)</label>
    <input type="date" name="bersihkan_bak_mesin_harian" class="form-control"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Pisau Tidak Motong (Harian)</label>
      <input type="date" name="pisau_tidak_motong_harian" class="form-control">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Cek Angin Kompresor (Harian)</label>
      <input type="date" name="cek_angin_kompresor_harian" class="form-control">
    </div>
    <label for="Input" class="form-label">Kebersihan Mesin (Harian)</label>
    <input type="date" name="kebersihan_mesin_harian" class="form-control"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Cek Kondisi Minyak Mesin (Harian)</label>
      <input type="date" name="cek_kondisi_minyak_mesin_harian" class="form-control">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Ganti Sparepart Lainnya (Harian)</label>
      <input type="date" name="ganti_sparepart_lainnya_harian" class="form-control">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Jenis Sparepart yang Diganti</label>
      <input type="text" name="jenis_sparepart_yang_diganti" class="form-control">
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
