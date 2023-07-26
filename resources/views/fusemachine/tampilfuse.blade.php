<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <nav class="navbar navbar-dark bg-secondary">
    <div class="container-fluid">
    <a class="navbar-brand" href="/fuse">StarFashion Maintenance</a>
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
<form action="/editfuse/{{$data_fuse->serial_number}}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="mb-3">
    <label for="Input" class="form-label">Serial Number</label>
    <input type="text" name="serial_number" class="form-control" value="{{$data_fuse->serial_number}}"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Tipe</label>
      <input type="text" name="tipe"  class="form-control" value= "{{ $data_fuse ->tipe }}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Label</label>
      <input type="number" name="label" class="form-control" value= "{{ $data_fuse ->label }}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Merk Mesin</label>
      <input type="text" name="merk_mesin" class="form-control" value= "{{ $data_fuse ->merk_mesin }}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Bagian</label>
      <input type="text" name="bagian" class="form-control" value= "{{ $data_fuse ->bagian }}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Tahun Pembelian</label>
      <input type="year" name="tahun_pembelian" class="form-control" value= "{{ $data_fuse ->tahun_pembelian }}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Tahun</label>
      <input type="year" name="tahun" class="form-control" value= "{{ $data_fuse->tahun }}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Belt Atas (Bulanan)</label>
      <input type="text" name="check_belt_atas_bulanan" class="form-control" value= "{{ $data_fuse ->check_belt_atas_bulanan }}">  
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Belt Bawah (Bulanan)</label>
      <input type="text" name="check_belt_bawah_bulanan" class="form-control" value= "{{ $data_fuse ->check_belt_bawah_bulanan }}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Tension Belt Atas (Bulanan)</label>
      <input type="text" name="tension_belt_atas_bulanan" class="form-control" value= "{{ $data_fuse ->tension_belt_atas_bulanan }}"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Tension Belt Bawah (Bulanan)</label>
      <input type="text" name="tension_belt_bawah_bulanan" class="form-control" value= "{{ $data_fuse ->tension_belt_bawah_bulanan }}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Bearing Tekanan Belt Atas (Bulanan)</label>
      <input type="text" name="bearing_tekanan_belt_atas_bulanan" class="form-control" value= "{{ $data_fuse ->bearing_tekanan_belt_atas_bulanan }}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Bearing Tekanan Belt Bawah (Bulanan)</label>
      <input type="text" name="bearing_tekanan_belt_bawah_bulanan" class="form-control" value= "{{ $data_fuse ->bearing_tekanan_belt_bawah_bulanan }}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Kondisi Roll Press Atas (Bulanan)</label>
      <input type="text" name="check_kondisi_rollpress_atas_bulanan" class="form-control" value= "{{ $data_fuse ->check_kondisi_rollpress_atas_bulanan}}">
      </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Kondisi Roll Press Bawah (Bulanan)</label>
      <input type="text" name="check_kondisi_rollpress_bawah_bulanan" class="form-control" value= "{{ $data_fuse ->check_kondisi_rollpress_bawah_bulanan }}">
      </div>
      <div class="mb-3">
    <label for="Input" class="form-label">Check Switch Control Belt (Bulanan)</label>
    <input type="text" name="check_switchkontrol_belt_bulanan" class="form-control" value= "{{ $data_fuse ->check_switchkontrol_belt_bulanan }}"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Kontrol Speed (Bulanan)</label>
      <input type="text" name="check_kontrol_speed_bulanan" class="form-control" value= "{{ $data_fuse ->check_kontrol_speed_bulanan}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Check Kontrol Temperatur (Bulanan)</label>
      <input type="text" name="check_kontrol_temperatur_bulanan" class="form-control" value= "{{ $data_fuse ->check_kontrol_temperatur_bulanan }}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Komponen Lainnya (Bulanan)</label>
      <input type="text" name="komponen_lainnya_bulanan" class="form-control" value= "{{ $data_fuse ->komponen_lainnya_bulanan }}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Pengecekan Bulanan dilakukan Tanggal</label>
      <input type="date" name="dicek_tanggal" class="form-control" value= "{{ $data_fuse ->dicek_tanggal }}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Ganti Belt Atas (Harian)</label>
      <input type="date" name="ganti_belt_atas_harian" class="form-control" value= "{{ $data_fuse ->jganti_belt_atas_harian }}"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Ganti Belt Bawah (Harian)</label>
      <input type="date" name="ganti_belt_bawah_harian" class="form-control" value= "{{ $data_fuse ->ganti_belt_bawah_harian }}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Perbaikan Tension Belt Atas (Harian)</label>
      <input type="date" name="perbaikan_tension_belt_atas_harian" class="form-control" value= "{{ $data_fuse ->perbaikan_tension_belt_atas_harian }}"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Perbaikan Tension Belt Bawah (Harian)</label>
      <input type="date" name="perbaikan_tension_belt_bawah_harian" class="form-control" value= "{{ $data_fuse ->perbaikan_tension_belt_bawah_harian }}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Ganti Bearing Tekanan Belt Atas (Harian)</label>
      <input type="date" name="ganti_bearing_tekanan_belt_atas_harian" class="form-control" value= "{{ $data_fuse ->ganti_bearing_tekanan_belt_atas_harian }}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Ganti Bearing Tekanan Belt Bawah (Harian)</label>
      <input type="date" name="ganti_bearing_tekanan_belt_bawah_harian" class="form-control" value= "{{ $data_fuse ->ganti_bearing_tekanan_belt_bawah_harian }}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Ganti Roll Press Atas (Harian)</label>
      <input type="date" name="ganti_rollpress_atas_harian" class="form-control" value= "{{ $data_fuse ->ganti_rollpress_atas_harian }}">
      </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Ganti Roll Press Bawah (Harian)</label>
      <input type="date" name="ganti_rollpress_bawah_harian" class="form-control" value= "{{ $data_fuse ->ganti_rollpress_bawah_harian }}">
      </div>
      <div class="mb-3">
    <label for="Input" class="form-label">Ganti Switch Control Belt (Harian)</label>
    <input type="date" name="ganti_switchkontrol_belt_harian" class="form-control" value= "{{ $data_fuse ->ganti_switchkontrol_belt_harian}}"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Ganti Kontrol Speed (Harian)</label>
      <input type="date" name="ganti_kontrol_speed_harian" class="form-control" value= "{{ $data_fuse ->ganti_kontrol_speed_harian}}">
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Ganti Kontrol Temperatur (Harian)</label>
      <input type="date" name="ganti_kontrol_temperatur_harian" class="form-control" value= "{{ $data_fuse ->ganti_kontrol_temperatur_harian}}">
    </div>
    <label for="Input" class="form-label">Servis dan Bersihkan Mesin (Harian)</label>
    <input type="date" name="servis_dan_bersihkan_mesin_harian" class="form-control" value= "{{ $data_fuse ->servis_dan_bersihkan_mesin_harian}}"> 
    </div>
    <div class="mb-3">
      <label for="Input" class="form-label">Komponen Lainnya (Harian)</label>
      <input type="date" name="komponen_lainnya_harian" class="form-control" value= "{{ $data_fuse ->komponen_lainnya_harian}}">
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
