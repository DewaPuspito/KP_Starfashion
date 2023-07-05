<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <nav class="navbar navbar-dark bg-primary">
    <div class="container-fluid">
    <a class="navbar-brand" href="/plotter">Checklist Mesin</a>
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
<form action="/insertplotter" method="POST" enctype="multipart/form-data">
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
      <label for="Input" class="form-label">Check Plotter Head (Bulanan)</label>
      <input type="text" name="check_plotter_head_bulanan" class="form-control"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Stand Pole (Bulanan)</label>
      <input type="text" name="check_stand_pole_bulanan" class="form-control">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Foot Bar (Bulanan)</label>
      <input type="text" name="check_foot_bar_bulanan" class="form-control"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Rolling Paper Role (Bulanan)</label>
      <input type="text" name="check_rolling_paper_pole_bulanan" class="form-control">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Sending Paper Role (Bulanan)</label>
      <input type="text" name="check_sending_paper_pole_bulanan" class="form-control">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Balancing Pole (Bulanan)</label>
      <input type="text" name="check_balancing_pole_bulanan" class="form-control">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Puiling Pole (Bulanan)</label>
      <input type="text" name="check_puiling_pole_bulanan" class="form-control">
      </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Paper Roller Hoop (Bulanan)</label>
      <input type="text" name="check_paper_roller_hoop_bulanan" class="form-control">
      </div>
      <div class="mb-3">
    <label for="Input" class="form-label">Check Connection Cable (Bulanan)</label>
    <input type="text" name="check_connection_cable_bulanan" class="form-control"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Print Head (Bulanan)</label>
      <input type="text" name="check_print_head_bulanan" class="form-control">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Kebersihan (Bulanan)</label>
      <input type="text" name="check_kebersihan_bulanan" class="form-control">
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
      <label for="Input" class="form-label">Perbaikan Plotter Head (Harian)</label>
      <input type="date" name="perbaikan_plotter_head_harian" class="form-control"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Perbaikan Stand Pole (Harian)</label>
      <input type="date" name="perbaikan_stand_pole_harian" class="form-control">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Perbaikan Foot Bar (Harian)</label>
      <input type="date" name="perbaikan_foot_bar_harian" class="form-control"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Perbaikan Rolling Paper Role (Harian)</label>
      <input type="date" name="perbaikan_rolling_paper_role_harian" class="form-control">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Perbaikan Sending Paper Role (Harian)</label>
      <input type="date" name="perbaikan_sending_paper_role_harian" class="form-control">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Perbaikan Balancing Pole (Harian)</label>
      <input type="date" name="perbaikan_balancing_pole_harian" class="form-control">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Perbaikan Puiling Pole (Harian)</label>
      <input type="date" name="perbaikan_puiling_pole_harian" class="form-control">
      </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Perbaikan Paper Roller Hoop (Harian)</label>
      <input type="date" name="perbaikan_paper_roller_hoop_harian" class="form-control">
      </div>
      <div class="mb-3">
    <label for="Input" class="form-label">Perbaikan Connection Cable (Harian)</label>
    <input type="date" name="perbaikan_connection_cable_harian" class="form-control"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Perbaikan/Ganti Print Head (Harian)</label>
      <input type="date" name="perbaikan_ganti_print_head_harian" class="form-control">
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