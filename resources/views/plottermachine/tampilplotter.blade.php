<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <nav class="navbar navbar-dark bg-secondary">
    <div class="container-fluid">
    <a class="navbar-brand" href="/plotter">StarFashion Maintenance</a>
    <img src="/images/logo.jpg" alt="Logo Starfashion" width="100" height="24">
    </div>
  </div>
</nav>
    <title>StarFashion Maintenance</title>
  </head>
  <body>
    <h1><center>Edit Item<center></h1>
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-6">
    <div class="card">
    <div class="card-body">
<form action="/editplotter/{{$data_plotter->serial_number}}" method="POST" enctype="multipart/form-data">
  @csrf
  @if (Route::has('login') && Auth::check())
  <div class="mb-3">
    <label for="Input" class="form-label">Serial Number</label>
    <input type="text" name="serial_number" class="form-control" value="{{$data_plotter->serial_number}}"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Tipe</label>
      <input type="text" name="tipe"  class="form-control" value="{{$data_plotter->tipe}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Label</label>
      <input type="number" name="label" class="form-control" value="{{$data_plotter->label}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Merk Mesin</label>
      <input type="text" name="merk_mesin" class="form-control" value="{{$data_plotter->merk_mesin}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Bagian</label>
      <input type="text" name="bagian" class="form-control" value="{{$data_plotter->bagian}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Tahun Pembelian</label>
      <input type="year" name="tahun_pembelian" class="form-control" value="{{$data_plotter->tahun_pembelian}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Tahun Terkini</label>
      <input type="year" name="tahun" class="form-control" value="{{$data_plotter->tahun}}">
    </div>
    @endif
    <div class="mb-3">
      <label for="Input" class="form-label">Check Plotter Head (Bulanan)</label>
      <input type="text" name="check_plotter_head_bulanan" class="form-control" value="{{$data_plotter->check_plotter_head_bulanan}}"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Stand Pole (Bulanan)</label>
      <input type="text" name="check_stand_pole_bulanan" class="form-control" value="{{$data_plotter->check_stand_pole_bulanan}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Foot Bar (Bulanan)</label>
      <input type="text" name="check_foot_bar_bulanan" class="form-control" value="{{$data_plotter->check_foot_bar_bulanan}}"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Rolling Paper Role (Bulanan)</label>
      <input type="text" name="check_rolling_paper_pole_bulanan" class="form-control" value="{{$data_plotter->check_rolling_paper_pole_bulanan}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Sending Paper Role (Bulanan)</label>
      <input type="text" name="check_sending_paper_pole_bulanan" class="form-control" value="{{$data_plotter->check_sending_paper_pole_bulanan}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Balancing Pole (Bulanan)</label>
      <input type="text" name="check_balancing_pole_bulanan" class="form-control" value="{{$data_plotter->check_balancing_pole_bulanan}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Puiling Pole (Bulanan)</label>
      <input type="text" name="check_puiling_pole_bulanan" class="form-control" value="{{$data_plotter->check_puiling_pole_bulanan}}">
      </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Paper Roller Hoop (Bulanan)</label>
      <input type="text" name="check_paper_roller_hoop_bulanan" class="form-control" value="{{$data_plotter->check_paper_roller_hoop_bulanan}}">
      </div>
      <div class="mb-3">
    <label for="Input" class="form-label">Check Connection Cable (Bulanan)</label>
    <input type="text" name="check_connection_cable_bulanan" class="form-control" value="{{$data_plotter->check_connection_cable_bulanan}}"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Print Head (Bulanan)</label>
      <input type="text" name="check_print_head_bulanan" class="form-control" value="{{$data_plotter->check_print_head_bulanan}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Kebersihan (Bulanan)</label>
      <input type="text" name="check_kebersihan_bulanan" class="form-control" value="{{$data_plotter->check_kebersihan_bulanan}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Pengecekan Bulanan dilakukan Tanggal</label>
      <input type="date" name="dicek_tanggal" class="form-control" value="{{$data_plotter->dicek_tanggal}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Perbaikan Plotter Head (Harian)</label>
      <input type="date" name="perbaikan_plotter_head_harian" class="form-control" value="{{$data_plotter->perbaikan_plotter_head_harian}}"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Perbaikan Stand Pole (Harian)</label>
      <input type="date" name="perbaikan_stand_pole_harian" class="form-control" value="{{$data_plotter->perbaikan_stand_pole_harian}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Perbaikan Foot Bar (Harian)</label>
      <input type="date" name="perbaikan_foot_bar_harian" class="form-control" value="{{$data_plotter->perbaikan_foot_bar_harian}}"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Perbaikan Rolling Paper Role (Harian)</label>
      <input type="date" name="perbaikan_rolling_paper_role_harian" class="form-control" value="{{$data_plotter->perbaikan_rolling_paper_role_harian}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Perbaikan Sending Paper Role (Harian)</label>
      <input type="date" name="perbaikan_sending_paper_role_harian" class="form-control" value="{{$data_plotter->perbaikan_sending_paper_role_harian}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Perbaikan Balancing Pole (Harian)</label>
      <input type="date" name="perbaikan_balancing_pole_harian" class="form-control" value="{{$data_plotter->perbaikan_balancing_pole_harian}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Perbaikan Puiling Pole (Harian)</label>
      <input type="date" name="perbaikan_puiling_pole_harian" class="form-control" value="{{$data_plotter->perbaikan_puiling_pole_harian}}">
      </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Perbaikan Paper Roller Hoop (Harian)</label>
      <input type="date" name="perbaikan_paper_roller_hoop_harian" class="form-control" value="{{$data_plotter->perbaikan_paper_roller_hoop_harian}}">
      </div>
      <div class="mb-3">
    <label for="Input" class="form-label">Perbaikan Connection Cable (Harian)</label>
    <input type="date" name="perbaikan_connection_cable_harian" class="form-control" value="{{$data_plotter->perbaikan_connection_cable_harian}}"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Perbaikan/Ganti Print Head (Harian)</label>
      <input type="date" name="perbaikan_ganti_print_head_harian" class="form-control" value="{{$data_plotter->perbaikan_ganti_print_head_harian}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Kebersihan Mesin (Harian)</label>
      <input type="date" name="kebersihan_mesin_harian" class="form-control" value="{{$data_plotter->kebersihan_mesin_harian}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Jenis Sparepart yang Diganti</label>
      <select class="form-select" name="id_sparepart" aria-label="Default select example">
        <option selected></option>
        @foreach ($data_sparepart as $sparepart )
        <option value="{{$sparepart->id_sparepart}}">{{$sparepart->nama_sparepart}}</option>
        @endforeach
      </select>
    </div>
    <div class="mb-3">
    <label for="Input" class="form-label">Indikator Kesehatan Mesin</label>
      <select class="form-select" name="indikator_mesin" aria-label="Default select example">
        <option selected>{{ $data_plotter ->indikator_mesin }}</option>
        <option value="Sehat">Sehat</option>
        <option value="Moderate">Moderate</option>
        <option value="Tidak Sehat">Tidak Sehat</option>
      </select>
    </div>
    <div class=text-center>
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
</div>
</div>
</body>
</html>
