<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <nav class="navbar navbar-dark bg-primary">
    <div class="container-fluid">
    <a class="navbar-brand" href="/pattern">Checklist Mesin</a>
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
<form action="/editpattern/{{$data_pattern->serial_number}}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="mb-3">
    <label for="Input" class="form-label">Serial Number</label>
    <input type="text" name="serial_number" class="form-control" value = "{{$data_pattern->serial_number}}" > 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Tipe</label>
      <input type="text" name="tipe"  class="form-control" value = "{{$data_pattern->tipe}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Label</label>
      <input type="number" name="label" class="form-control" value = "{{$data_pattern->label}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Merk Mesin</label>
      <input type="text" name="merk_mesin" class="form-control" value = "{{$data_pattern->merk_mesin}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Bagian</label>
      <input type="text" name="bagian" class="form-control" value = "{{$data_pattern->bagian}}">
      </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Tahun</label>
      <input type="year" name="tahun" class="form-control" value = "{{$data_pattern->tahun}}">
      </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Pemberian Minyak pada Ril (Bulanan)</label>
      <input type="text" name="pemberian_minyak_pada_ril_bulanan" class="form-control" value = "{{$data_pattern->pemberian_minyak_pada_ril_bulanan}}"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Pulpen (Bulanan)</label>
      <input type="text" name="check_pulpen_bulanan" class="form-control" value = "{{$data_pattern->check_pulpen_bulanan}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Pisau (Bulanan)</label>
      <input type="text" name="check_pisau_bulanan" class="form-control" value = "{{$data_pattern->check_pisau_bulanan}}"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Elektro (Bulanan)</label>
      <input type="text" name="check_elektro_bulanan" class="form-control" value = "{{$data_pattern->check_elektro_bulanan}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Instalasi Kelistrikan (Bulanan)</label>
      <input type="text" name="check_instalasi_kelistrikan_bulanan" class="form-control" value = "{{$data_pattern->check_instalasi_kelistrikan_bulanan}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Vacum (Bulanan)</label>
      <input type="text" name="check_vacum_bulanan" class="form-control" value = "{{$data_pattern->check_vacum_bulanan}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Belt (Bulanan)</label>
      <input type="text" name="check_belt_bulanan" class="form-control" value = "{{$data_pattern->check_belt_bulanan}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Dicek Tanggal</label>
      <input type="date" name="dicek_tanggal" class="form-control" value = "{{$data_pattern->dicek_tanggal}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Tahun Pembelian</label>
      <input type="year" name="tahun_pembelian" class="form-control" value = "{{$data_pattern->tahun_pembelian}}">
      </div>
      <div class="mb-3">
      <label for="Input" class="form-label">Pemberian Minyak pada Ril (Harian)</label>
      <input type="date" name="pemberian_minyak_pada_ril_harian" class="form-control" value = "{{$data_pattern->pemberian_minyak_pada_ril_harian}}"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Ganti Pulpen (Harian)</label>
      <input type="date" name="ganti_pulpen_harian" class="form-control" value = "{{$data_pattern->ganti_pulpen_harian}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Ganti Pisau (Harian)</label>
      <input type="date" name="ganti_pisau_harian" class="form-control" value = "{{$data_pattern->ganti_pisau_harian}}"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Ganti Komponen Elektro (Harian)</label>
      <input type="date" name="ganti_komponen_elektro_harian" class="form-control" value = "{{$data_pattern->ganti_komponen_elektro_harian}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Ganti Instalasi Kelistrikan (Harian)</label>
      <input type="date" name="ganti_instalasi_kelistrikan_harian" class="form-control" value = "{{$data_pattern->ganti_instalasi_kelistrikan_harian}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Ganti Vacum (Harian)</label>
      <input type="date" name="ganti_vacum_harian" class="form-control" value = "{{$data_pattern->ganti_vacum_harian}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Ganti Belt (Harian)</label>
      <input type="date" name="ganti_belt_harian" class="form-control" value = "{{$data_pattern->ganti_belt_harian}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Kebersihan Mesin (Harian)</label>
      <input type="date" name="kebersihan_mesin_harian" class="form-control" value = "{{$data_pattern->kebersihan_mesin_harian}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Jenis Sparepart yang Diganti</label>
      <input type="text" name="jenis_sparepart_yang_diganti" class="form-control" value = "{{$data_pattern->jenis_sparepart_yang_diganti}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Tanggal Sparepart Diganti</label>
      <input type="date" name="tanggal_sparepart_diganti" class="form-control" value = "{{$data_pattern->tanggal_sparepart_diganti}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Harga Sparepart</label>
      <input type="number" name="harga_sparepart" class="form-control" value = "{{$data_pattern->harga_sparepart}}">
    </div>
    <div class=text-center>
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
</div>
</div>
</body>
</html>
