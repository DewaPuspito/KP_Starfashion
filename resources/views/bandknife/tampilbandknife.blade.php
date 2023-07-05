<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <nav class="navbar navbar-dark bg-primary">
    <div class="container-fluid">
    <a class="navbar-brand" href="/band-knife">Checklist Mesin</a>
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
<form action="/editbandknife/{{$data_bandknife->serial_number}}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="mb-3">
    <label for="Input" class="form-label">Serial Number</label>
    <input type="text" name="serial_number" class="form-control" value="{{$data_bandknife->serial_number}}"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Tipe</label>
      <input type="text" name="tipe"  class="form-control" value="{{$data_bandknife->tipe}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Label</label>
      <input type="number" name="label" class="form-control" value="{{$data_bandknife->label}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Merk Mesin</label>
      <input type="text" name="merk_mesin" class="form-control" value="{{$data_bandknife->merk_mesin}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Bagian</label>
      <input type="text" name="bagian" class="form-control" value="{{$data_bandknife->bagian}}">
      </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Tahun</label>
      <input type="year" name="tahun" class="form-control" value="{{$data_bandknife->tahun}}">
      </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Electrical Instalasi (Bulanan)</label>
      <input type="text" name="check_electrical_instalasi_bulanan" class="form-control" value="{{$data_bandknife->check_electrical_instalasi_bulanan}}"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Motor Bearing Pully (Bulanan)</label>
      <input type="text" name="check_motor_bearing_pully_bulanan" class="form-control" value="{{$data_bandknife->check_motor_bearing_pully_bulanan}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Kekencangan Pisau (Bulanan)</label>
      <input type="text" name="check_kekencangan_pisau_bulanan" class="form-control" value="{{$data_bandknife->check_kekencangan_pisau_bulanan}}"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Pully Atas Bearing (Bulanan)</label>
      <input type="text" name="check_pullyatas_bearing_bulanan" class="form-control" value="{{$data_bandknife->check_pullyatas_bearing_bulanan}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Gerinda/Asahan Pisau (Bulanan)</label>
      <input type="text" name="check_gerinda_asahan_pisau_bulanan" class="form-control" value="{{$data_bandknife->check_gerinda_asahan_pisau_bulanan}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Dinamo Kompresor (Bulanan)</label>
      <input type="text" name="check_dinamo_kompresor_bulanan" class="form-control" value="{{$data_bandknife->check_dinamo_kompresor_bulanan}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Dicek Tanggal</label>
      <input type="date" name="dicek_tanggal" class="form-control" value="{{$data_bandknife->dicek_tanggal}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Tahun Pembelian</label>
      <input type="year" name="tahun_pembelian" class="form-control" value="{{$data_bandknife->tahun_pembelian}}">
      </div>
      <div class="mb-3">
      <label for="Input" class="form-label">Perbaikan Electrical Instalasi (Harian)</label>
      <input type="date" name="perbaikan_electrical_instalasi_harian" class="form-control" value="{{$data_bandknife->perbaikan_electrical_instalasi_harian}}"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Ganti/Perbaikan Motor Bearing Pully (Harian)</label>
      <input type="date" name="ganti_perbaikan_motor_bearing_pully_harian" class="form-control" value="{{$data_bandknife->ganti_perbaikan_motor_bearing_pully_harian}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Ganti/Perbaikan Pully Atas Bearing (Harian)</label>
      <input type="date" name="ganti_perbaikan_pullyatas_bearing_harian" class="form-control" value="{{$data_bandknife->ganti_perbaikan_pullyatas_bearing_harian}}"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Ganti Gerinda/Asahan Pisau (Harian)</label>
      <input type="date" name="ganti_gerinda_asahan_pisau_harian" class="form-control" value="{{$data_bandknife->ganti_gerinda_asahan_pisau_harian}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Ganti/Perbaikan Dinamo Kompresor (Harian)</label>
      <input type="date" name="ganti_perbaikan_dinamo_kompresor_harian" class="form-control" value="{{$data_bandknife->ganti_perbaikan_dinamo_kompresor_harian}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Servis Bersihkan Mesin (Harian)</label>
      <input type="date" name="servis_bersihkan_mesin_harian" class="form-control" value="{{$data_bandknife->servis_bersihkan_mesin_harian}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Ganti Sparepart Lainnya (Harian)</label>
      <input type="date" name="ganti_sparepart_lainnya_harian" class="form-control" value="{{$data_bandknife->ganti_sparepart_lainnya_harian}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Jenis Sparepart yang Diganti</label>
      <input type="text" name="jenis_sparepart_yang_diganti" class="form-control" value="{{$data_bandknife->jenis_sparepart_yang_diganti}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Tanggal Sparepart Diganti</label>
      <input type="date" name="tanggal_sparepart_diganti" class="form-control" value="{{$data_bandknife->tanggal_sparepart_diganti}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Harga Sparepart</label>
      <input type="number" name="harga_sparepart" class="form-control" value="{{$data_bandknife->harga_sparepart}}">
    </div>
    <div class=text-center>
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
</div>
</div>
</body>
</html>
