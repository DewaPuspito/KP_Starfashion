<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.slim.js" integrity="sha256-7GO+jepT9gJe9LB4XFf8snVOjX3iYNb0FHYr5LI1N5c=" crossorigin="anonymous"></script>
    <nav class="navbar navbar-dark bg-secondary">
    <div class="container-fluid">
    <a class="navbar-brand" href="/km-cutting">StarFashion Maintenance</a>
    <img src="/images/logo.jpg" alt="Logo Starfashion" width="100" height="24">
    </div>
  </div>
</nav>
<title>StarFashion Maintenance</title>
  </head>
  <body>
  <h1><center>KM Cutting Machine<center></h1>
  <div class="row">
    @if ($message = Session::get('success'))
      <div class="alert alert-success" role="alert">
        {{ $message }}
      </div>
      @endif
<div class="card" style="margin:20px;">
  <div class="card-header">Details</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Serial Number : {{ $data_km_cutting ->serial_number }}</h5>
        <p class="card-text">Tipe : {{ $data_km_cutting ->tipe }}</p>
        <p class="card-text">Label : {{ $data_km_cutting ->label }}</p>
        <p class="card-text">Merk Mesin : {{ $data_km_cutting ->merk_mesin }}</p>
        <p class="card-text">Bagian : {{ $data_km_cutting ->bagian }}</p>
        <p class="card-text">Tahun : {{ $data_km_cutting ->tahun }}</p>
        <p class="card-text">Automatic Cut Out Switch (Bulanan) : {{ $data_km_cutting ->automatic_cutout_switch_bulanan}}</p>
        <p class="card-text">Insulate Plate (Bulanan) : {{ $data_km_cutting ->insulate_plate_bulanan }}</p>
        <p class="card-text">Oil Tank (Bulanan): {{ $data_km_cutting ->oil_tank_bulanan }}</p>
        <p class="card-text">Oil Tank Cap (Bulanan) : {{ $data_km_cutting ->oil_tank_cap_bulanan }}</p>
        <p class="card-text">RH Guide (Bulanan) : {{ $data_km_cutting ->rh_guide_bulanan }}</p>
        <p class="card-text">LH Guide (Bulanan) : {{ $data_km_cutting ->lh_guide_bulanan }}</p>
        <p class="card-text">Bellcrank with Pin and Bushing (Bulanan) : {{ $data_km_cutting ->bellcrank_with_pin_and_bushing_bulanan }}</p>
        <p class="card-text">Gear and Shaft (Bulanan) : {{ $data_km_cutting ->gear_and_shaft_bulanan }}</p>
        <p class="card-text">Screwshaft LH RH Extension (Bulanan) : {{ $data_km_cutting ->screwshaft_lh_rh_extension_bulanan }}</p>
        <p class="card-text">LH Square Shaft (Bulanan) : {{ $data_km_cutting ->lh_square_shaft_bulanan }}</p>
        <p class="card-text">Thread Guide (Bulanan) : {{ $data_km_cutting ->thread_guide_bulanan }}</p>
        <p class="card-text">Sparepart Lainnya (Bulanan) : {{ $data_km_cutting ->sparepart_lainnya_bulanann }}</p>  
        <p class="card-text">Pengecekan Bulanan dilakukan Tanggal: {{ $data_km_cutting ->dicek_tanggal }}</p>
        <p class="card-text">Tahun Pembelian : {{ $data_km_cutting ->tahun_pembelian }}</p>
        <p class="card-text">Pisau Tumpul (Harian) : {{ $data_km_cutting ->pisau_tumpul_harian }}</p>
        <p class="card-text">Minyak Habis (Harian): {{ $data_km_cutting ->minyak_habis_harian }}</p>
        <p class="card-text">Ganti Abrasif (Harian) : {{ $data_km_cutting ->ganti_abrasif_harian }}</p>
        <p class="card-text">Check Instalasi Kabel (Harian) : {{ $data_km_cutting ->check_instalasi_kabel_harian }}</p>
        <p class="card-text">Kebersihan Mesin (Harian) : {{ $data_km_cutting ->kebersihan_mesin_harian }}</p>
        <p class="card-text">Check Kondisi Mesin (Harian) : {{ $data_km_cutting ->check_kondisi_mesin_harian }}</p>
        <p class="card-text">Komponen Lainnya (Harian): {{ $data_km_cutting ->komponen_lainnya_harian }}</p>
        <p class="card-text">Tanggal Sparepart Diganti : {{$data_km_cutting->sparepart->sparepart_keluar ?? 'N/A'}}</p>
        <p class="card-text">Jenis Sparepart yang Diganti : {{$data_km_cutting ->sparepart->nama_sparepart ?? 'N/A'}}</p>
        <p class="card-text">Harga Sparepart : {{$data_km_cutting ->sparepart->harga_sparepart ?? 'N/A'}}</p>
        <p class="card-text">Indikator Kesehatan Mesin : {{ $data_km_cutting ->indikator_mesin }}</p>
        <div class=text-center>
        <td><a class="btn btn-secondary" href="/historykmcutting/{{$data_km_cutting->serial_number}}" role="button">See History</a>
        <a class="btn btn-warning" href="/tampilkmcutting/{{$data_km_cutting ->serial_number}}" role="button">Update</a>
        <a class="btn btn-danger delete" data-id ="{{$data_km_cutting ->serial_number}}" href="#" role="button">Delete</a></td>
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
        window.location = "/deletekmcutting/"+serial_number+""
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