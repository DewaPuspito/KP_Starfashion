<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.slim.js" integrity="sha256-7GO+jepT9gJe9LB4XFf8snVOjX3iYNb0FHYr5LI1N5c=" crossorigin="anonymous"></script>
    <nav class="navbar navbar-dark bg-primary">
    <div class="container-fluid">
    <a class="navbar-brand" href="/fuse">Checklist Mesin</a>
    <img src="/images/logo.jpg" alt="Logo Starfashion" width="100" height="24">
    </div>
  </div>
</nav>
<title>Checklist Mesin</title>
  </head>
  <body>
  <h1><center>Fuse Machine<center></h1>
<div class="card" style="margin:20px;">
  <div class="card-header">Details</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Serial Number : {{ $data_fuse ->serial_number }}</h5>
        <p class="card-text">Tipe : {{ $data_fuse ->tipe }}</p>
        <p class="card-text">Label : {{ $data_fuse ->label }}</p>
        <p class="card-text">Merk Mesin : {{ $data_fuse ->merk_mesin }}</p>
        <p class="card-text">Bagian : {{ $data_fuse ->bagian }}</p>
        <p class="card-text">Tahun : {{ $data_fuse->tahun }}</p>
        <p class="card-text">Check Belt Atas (Bulanan) : {{ $data_fuse ->check_belt_atas_bulanan }}</p>
        <p class="card-text">Check Belt Bawah (Bulanan) : {{ $data_fuse ->check_belt_bawah_bulanan }}</p>
        <p class="card-text">Tension Belt Atas (Bulanan): {{ $data_fuse ->tension_belt_atas_bulanan }}</p>
        <p class="card-text">Tension Belt Bawah (Bulanan) : {{ $data_fuse ->tension_belt_bawah_bulanan }}</p>
        <p class="card-text">Bearing Tekanan Belt Atas (Bulanan) : {{ $data_fuse ->bearing_tekanan_belt_atas_bulanan }}</p>
        <p class="card-text">Bearing Tekanan Belt Bawah (Bulanan) : {{ $data_fuse ->bearing_tekanan_belt_bawah_bulanan }}</p>
        <p class="card-text">Check Kondisi Roll Press Atas (Bulanan) : {{ $data_fuse ->check_kondisi_rollpress_atas_bulanan}}</p>
        <p class="card-text">Check Kondisi Roll Press Bawah (Bulanan) : {{ $data_fuse ->check_kondisi_rollpress_bawah_bulanan }}</p>
        <p class="card-text">Check Switch Control Belt (Bulanan) : {{ $data_fuse ->check_switchkontrol_belt_bulanan }}</p>
        <p class="card-text">Check Kontrol Speed (Bulanan) : {{ $data_fuse ->check_kontrol_speed_bulanan}}</p>
        <p class="card-text">Check Kontrol Temperatur (Bulanan) : {{ $data_fuse ->check_kontrol_temperatur_bulanan }}</p>
        <p class="card-text">Komponen Lainnya (Bulanan) : {{ $data_fuse ->komponen_lainnya_bulanan }}</p>  
        <p class="card-text">Dicek Tanggal: {{ $data_fuse ->dicek_tanggal }}</p>
        <p class="card-text">Tahun Pembelian : {{ $data_fuse ->tahun_pembelian }}</p>
        <p class="card-text">Ganti Belt Atas (Harian) : {{ $data_fuse ->ganti_belt_atas_harian }}</p>
        <p class="card-text">Ganti Belt Bawah (Harian): {{ $data_fuse ->ganti_belt_bawah_harian }}</p>
        <p class="card-text">Perbaikan Tension Belt Atas (Harian) : {{ $data_fuse ->perbaikan_tension_belt_atas_harian }}</p>
        <p class="card-text">Perbaikan Tension Belt Bawah (Harian) : {{ $data_fuse ->perbaikan_tension_belt_bawah_harian }}</p>
        <p class="card-text">Ganti Bearing Tekanan Belt Atas (Harian) : {{ $data_fuse ->ganti_bearing_tekanan_belt_atas_harian }}</p>
        <p class="card-text">Ganti Bearing Tekanan Belt Bawah (Harian) : {{ $data_fuse ->ganti_bearing_tekanan_belt_bawah_harian }}</p>
        <p class="card-text">Ganti Roll Press Atas(Harian): {{ $data_fuse ->ganti_rollpress_atas_harian }}</p>
        <p class="card-text">Ganti Roll Press Bawah (Harian): {{ $data_fuse ->ganti_rollpress_bawah_harian }}</p>
        <p class="card-text">Ganti Switch Control Belt  (Harian) : {{ $data_fuse ->ganti_switchkontrol_belt_harian}}</p>
        <p class="card-text">Ganti Kontrol Speed (Harian) : {{ $data_fuse ->ganti_kontrol_speed_harian}}</p>
        <p class="card-text">Ganti Kontrol Temperatur (Harian) : {{ $data_fuse ->ganti_kontrol_temperatur_harian}}</p>
        <p class="card-text">Servis dan Bersihkan Mesin (Harian) : {{ $data_fuse ->servis_dan_bersihkan_mesin_harian}}</p>
        <p class="card-text">Komponen Lainnya (Harian) : {{ $data_fuse ->komponen_lainnya_harian}}</p>
        <p class="card-text">Jenis Sparepart yang Diganti : {{$data_fuse ->sparepart->nama_sparepart ?? 'N/A'}}</p>
        <p class="card-text">Harga Sparepart : {{$data_fuse ->sparepart->harga_sparepart ?? 'N/A'}}</p>
        <div class= text-center>
        <td><a class="btn btn-warning" href="/tampilfuse/{{$data_fuse->serial_number}}" role="button">Update</a>
        <a class="btn btn-danger delete" data-id="{{ $data_fuse ->serial_number }}" href="#" role="button">Delete</a></td>
      </div>
    </hr>
  </div>
</div>
</body>
<script>
  $('.delete').click(function(){
    var serial_number = $(this).attr('data-id')
    swal({
      title: "Yakin ingin menghapus?",
      text: "Setelah dihapus, data tidak akan bisa dikembalikan lagi!",
      icon: "warning",
      buttons: true,
      dangerMode: true,
      })
    .then((willDelete) => {
      if (willDelete) {
        window.location = "/deletefuse/"+serial_number+""
        swal("Data berhasil dihapus", {
        icon: "success",
    });
      } else {
        swal("Data tidak jadi dihapus");
      }
    });
  });
</script>
</html>