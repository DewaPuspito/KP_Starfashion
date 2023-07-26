<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <nav class="navbar navbar-dark bg-secondary">
    <div class="container-fluid">
    <a class="navbar-brand" href="/metal-detector">StarFashion Maintenance</a>
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
<form action="/editmetaldetector/{{$data_metaldetector->serial_number}}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="mb-3">
    <label for="Input" class="form-label">Serial Number</label>
    <input type="text" name="serial_number" class="form-control" value = "{{$data_metaldetector->serial_number}}"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Tipe</label>
      <input type="text" name="tipe"  class="form-control" value = "{{$data_metaldetector->tipe}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Label</label>
      <input type="number" name="label" class="form-control" value = "{{$data_metaldetector->label}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Merk Mesin</label>
      <input type="text" name="merk_mesin" class="form-control" value = "{{$data_metaldetector->merk_mesin}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Bagian</label>
      <input type="text" name="bagian" class="form-control" value = "{{$data_metaldetector->bagian}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Tahun Pembelian</label>
      <input type="year" name="tahun_pembelian" class="form-control" value = "{{$data_metaldetector->tahun_pembelian}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Tahun Terkini</label>
      <input type="year" name="tahun" class="form-control" value = "{{$data_metaldetector->tahun}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Instalasi Electrical (Bulanan)</label>
      <input type="text" name="check_instalasi_electrical_bulanan" class="form-control" value = "{{$data_metaldetector->check_instalasi_electrical_bulanan}}"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Switch Auto Stop (Bulanan)</label>
      <input type="text" name="check_switch_auto_stop_bulanan" class="form-control" value = "{{$data_metaldetector->check_switch_auto_stop_bulanan}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Belt (Bulanan)</label>
      <input type="text" name="check_belt_bulanan" class="form-control" value = "{{$data_metaldetector->check_belt_bulanan}}"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Dinamo Motor (Bulanan)</label>
      <input type="text" name="check_dinamo_motor_bulanan" class="form-control" value = "{{$data_metaldetector->check_dinamo_motor_bulanan}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Sensifitas Metal (Bulanan)</label>
      <input type="text" name="check_sensitifitas_metal_bulanan" class="form-control" value = "{{$data_metaldetector->check_sensitifitas_metal_bulanan}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Spare Parts Lainnya (Bulanan)</label>
      <input type="text" name="check_spare_parts_lainnya_bulanan" class="form-control" value = "{{$data_metaldetector->check_spare_parts_lainnya_bulanan}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Kebersihan Mesin (Bulanan)</label>
      <input type="text" name="kebersihan_mesin_bulanan" class="form-control" value = "{{$data_metaldetector->kebersihan_mesin_bulanan}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Pengecekan Bulanan dilakukan Tanggal</label>
      <input type="date" name="dicek_tanggal" class="form-control" value = "{{$data_metaldetector->dicek_tanggal}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Perbaikan Instalasi Electrical (Harian)</label>
      <input type="date" name="perbaikan_instalasi_electrical_harian" class="form-control" value = "{{$data_metaldetector->perbaikan_instalasi_electrical_harian}}"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Perbaikan Switch Auto Stop (Harian)</label>
      <input type="date" name="perbaikan_switch_auto_stop_harian" class="form-control" value = "{{$data_metaldetector->perbaikan_switch_auto_stop_harian}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Perbaikan Belt (Harian)</label>
      <input type="date" name="perbaikan_belt_harian" class="form-control" value = "{{$data_metaldetector->perbaikan_belt_harian}}"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Perbaikan Dinamo Motor (Harian)</label>
      <input type="date" name="perbaikan_dinamo_motor_harian" class="form-control" value = "{{$data_metaldetector->perbaikan_dinamo_motor_harian}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Perbaikan Sensifitas Metal (Harian)</label>
      <input type="date" name="perbaikan_sensitifitas_metal_harian" class="form-control" value = "{{$data_metaldetector->perbaikan_sensitifitas_metal_harian}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Spare Parts Lainnya (Harian)</label>
      <input type="date" name="check_spareparts_lainnya_harian" class="form-control" value = "{{$data_metaldetector->check_spareparts_lainnya_harian}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Kebersihan Mesin (Harian)</label>
      <input type="date" name="kebersihan_mesin_harian" class="form-control" value = "{{$data_metaldetector->kebersihan_mesin_harian}}">
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
        <option selected>{{ $data_metaldetector ->indikator_mesin }}</option>
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
