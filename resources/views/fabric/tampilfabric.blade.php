<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <nav class="navbar navbar-dark bg-secondary">
    <div class="container-fluid">
    <a class="navbar-brand" href="/fabric">Checklist Mesin</a>
    <img src="/images/logo.jpg" alt="Logo Starfashion" width="100" height="24">
    </div>
  </div>
</nav>
    <title>Checklist Mesin</title>
  </head>
  <body>
    <h1><center>Edit Item<center></h1>
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-6">
    <div class="card">
    <div class="card-body">
<form action="/editfabric/{{$data_fabric->serial_number}}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="mb-3">
    <label for="Input" class="form-label">Serial Number</label>
    <input type="text" name="serial_number" class="form-control" value="{{$data_fabric->serial_number}}"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Tipe</label>
      <input type="text" name="tipe" class="form-control" value="{{$data_fabric->tipe}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Label</label>
      <input type="number" name="label" class="form-control" value="{{$data_fabric->label}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Merk Mesin</label>
      <input type="text" name="merk_mesin" class="form-control" value="{{$data_fabric->merk_mesin}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Bagian</label>
      <input type="text" name="bagian" class="form-control" value="{{$data_fabric->bagian}}">
      </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Tahun</label>
      <input type="year" name="tahun" class="form-control" value="{{$data_fabric->tahun}}">
      </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Gear Box (Bulanan)</label>
      <input type="text" name="check_gear_box_bulanan" class="form-control" value="{{$data_fabric->check_gear_box_bulanan}}"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Ganti Oli Gear Box (Bulanan)</label>
      <input type="text" name="ganti_oli_gear_box_bulanan" class="form-control" value="{{$data_fabric->ganti_oli_gear_box_bulanan}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Tegangan Rantai (Bulanan)</label>
      <input type="text" name="check_tegangan_rantai_bulanan" class="form-control" value="{{$data_fabric->check_tegangan_rantai_bulanan}}"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Electrical dan Motor (Bulanan)</label>
      <input type="text" name="check_electrical_dan_motor_bulanan" class="form-control" value="{{$data_fabric->check_electrical_dan_motor_bulanan}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Kebersihan Mesin (Bulanan)</label>
      <input type="text" name="kebersihan_mesin_bulanan" class="form-control" value="{{$data_fabric->kebersihan_mesin_bulanan}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Pemberian Grease pada Roller (Bulanan)</label>
      <input type="text" name="pemberian_grease_pada_roller_bulanan" class="form-control" value="{{$data_fabric->pemberian_grease_pada_roller_bulanan}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Komponen Lainnya (Bulanan)</label>
      <input type="text" name="komponen_lainnya_bulanan" class="form-control" value="{{$data_fabric->komponen_lainnya_bulanan}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Dicek Tanggal</label>
      <input type="date" name="dicek_tanggal" class="form-control" value="{{$data_fabric->dicek_tanggal}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Tahun Pembelian</label>
      <input type="year" name="tahun_pembelian" class="form-control" value="{{$data_fabric->tahun_pembelian}}">
      </div>
      <div class="mb-3">
      <label for="Input" class="form-label">Perbaikan Gear Box (Harian)</label>
      <input type="date" name="perbaikan_gear_box_harian" class="form-control" value="{{$data_fabric->perbaikan_gear_box_harian}}"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Ganti Oli Gear Box (Harian)</label>
      <input type="date" name="ganti_oli_gear_box_harian" class="form-control" value="{{$data_fabric->ganti_oli_gear_box_harian}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Perbaikan Tegangan Rantai (Harian)</label>
      <input type="date" name="perbaikan_tegangan_rantai_harian" class="form-control" value="{{$data_fabric->perbaikan_tegangan_rantai_harian}}"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Perbaikan Electrical dan Motor (Harian)</label>
      <input type="date" name="perbaikan_electrical_dan_motor_harian" class="form-control" value="{{$data_fabric->perbaikan_electrical_dan_motor_harian}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Kebersihan Mesin (Harian)</label>
      <input type="date" name="kebersihan_mesin_harian" class="form-control" value="{{$data_fabric->kebersihan_mesin_harian}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Pemberian Grease pada Roller (Harian)</label>
      <input type="date" name="pemberian_grease_pada_roller_harian" class="form-control" value="{{$data_fabric->pemberian_grease_pada_roller_harian}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Ganti Karet Roller (Harian)</label>
      <input type="date" name="penggantian_karet_roller_harian" class="form-control" value="{{$data_fabric->penggantian_karet_roller_harian}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Komponen Lainnya (Harian)</label>
      <input type="date" name="komponen_lainnya_harian" class="form-control" value="{{$data_fabric->komponen_lainnya_harian}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Tanggal Sparepart Diganti</label>
      <input type="date" name="tanggal_sparepart_diganti" class="form-control" value="{{$data_fabric->tanggal_sparepart_diganti}}">
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
      <select class="form-select" aria-label="Default select example">
        <option selected></option>
        <option value="Sehat">Sehat</option>
        <option value="Moderate">Moderate</option>
        <option value="Tidak Sehat">Tidak Sehat</option>
      </select>
    </div>
    <div class= text-center>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</body>
</html>
