<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <nav class="navbar navbar-dark bg-secondary">
    <div class="container-fluid">
    <a class="navbar-brand" href="/km-cutting">Checklist Mesin</a>
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
<form action="/editkmcutting/{{$data_km_cutting->serial_number}}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="mb-3">
    <label for="Input" class="form-label">Serial Number</label>
    <input type="text" name="serial_number" class="form-control" value = "{{$data_km_cutting->serial_number}}"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Tipe</label>
      <input type="text" name="tipe"  class="form-control" value = "{{$data_km_cutting->tipe}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Label</label>
      <input type="number" name="label" class="form-control" value = "{{$data_km_cutting->label}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Merk Mesin</label>
      <input type="text" name="merk_mesin" class="form-control" value = "{{$data_km_cutting->merk_mesin}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Bagian</label>
      <input type="text" name="bagian" class="form-control" value = "{{$data_km_cutting->bagian}}"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Tahun Pembelian</label>
      <input type="year" name="tahun_pembelian" class="form-control" value = "{{$data_km_cutting->tahun_pembelian}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Tahun Terkini</label>
      <input type="year" name="tahun" class="form-control" value = "{{$data_km_cutting->tahun}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Automatic Cut Out Switch (Bulanan)</label>
      <input type="text" name="automatic_cutout_switch_bulanan" class="form-control" value = "{{$data_km_cutting->automatic_cutout_switch_bulanan}}"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Insulate Plate (Bulanan)</label>
      <input type="text" name="insulate_plate_bulanan" class="form-control" value = "{{$data_km_cutting->insulate_plate_bulanan}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Oil Tank (Bulanan)</label>
      <input type="text" name="oil_tank_bulanan" class="form-control" value = "{{$data_km_cutting->oil_tank_bulanan}}"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Oil Tank Cap (Bulanan)</label>
      <input type="text" name="oil_tank_cap_bulanan" class="form-control" value = "{{$data_km_cutting->oil_tank_cap_bulanan}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">RH Guide (Bulanan)</label>
      <input type="text" name="rh_guide_bulanan" class="form-control" value = "{{$data_km_cutting->rh_guide_bulanan}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">LH Guide (Bulanan)</label>
      <input type="text" name="lh_guide_bulanan" class="form-control" value = "{{$data_km_cutting->lh_guide_bulanan}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Bellcrank with Pin and Bushing (Bulanan)</label>
      <input type="text" name="bellcrank_with_pin_and_bushing_bulanan" class="form-control" value = "{{$data_km_cutting->bellcrank_with_pin_and_bushing_bulanan}}">
      </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Gear and Shaft (Bulanan)</label>
      <input type="text" name="gear_and_shaft_bulanan" class="form-control" value = "{{$data_km_cutting->gear_and_shaft_bulanan}}">
      </div>
      <div class="mb-3">
    <label for="Input" class="form-label">Screwshaft LH RH Extension (Bulanan)</label>
    <input type="text" name="screwshaft_lh_rh_extension_bulanan" class="form-control" value = "{{$data_km_cutting->screwshaft_lh_rh_extension_bulanan}}"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">LH Square Shaft (Bulanan)</label>
      <input type="text" name="lh_square_shaft_bulanan" class="form-control" value = "{{$data_km_cutting->lh_square_shaft_bulanan}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Thread Guide (Bulanan)</label>
      <input type="text" name="thread_guide_bulanan" class="form-control" value = "{{$data_km_cutting->thread_guide_bulanan}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Sparepart Lainnya (Bulanan)</label>
      <input type="text" name="sparepart_lainnya_bulanan" class="form-control" value = "{{$data_km_cutting->sparepart_lainnya_bulanan}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Pengecekan Bulanan dilakukan Tanggal</label>
      <input type="date" name="dicek_tanggal" class="form-control" value = "{{$data_km_cutting->dicek_tanggal}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Pisau Tumpul (Harian)</label>
      <input type="date" name="pisau_tumpul_harian" class="form-control" value = "{{$data_km_cutting->pisau_tumpul_harian}}"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Minyak Habis (Harian)</label>
      <input type="date" name="minyak_habis_harian" class="form-control" value = "{{$data_km_cutting->minyak_habis_harian}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Ganti Abrasif (Harian)</label>
      <input type="date" name="ganti_abrasif_harian" class="form-control" value = "{{$data_km_cutting->ganti_abrasif_harian}}"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Instalasi Kabel (Harian)</label>
      <input type="date" name="check_instalasi_kabel_harian" class="form-control" value = "{{$data_km_cutting->check_instalasi_kabel_harian}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Kebersihan Mesin (Harian)</label>
      <input type="date" name="kebersihan_mesin_harian" class="form-control" value = "{{$data_km_cutting->kebersihan_mesin_harian}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Kondisi Mesin (Harian)</label>
      <input type="date" name="check_kondisi_mesin_harian" class="form-control" value = "{{$data_km_cutting->check_kondisi_mesin_harian}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Komponen Lainnya (Harian)</label>
      <input type="date" name="komponen_lainnya_harian" class="form-control" value = "{{$data_km_cutting->komponen_lainnya_harian}}">
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
    <div class=text-center>
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
</div>
</div>
</body>
</html>
