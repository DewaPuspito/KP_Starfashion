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
    <a class="navbar-brand" href="/band-knife">Checklist Mesin</a>
    <img src="/images/logo.jpg" alt="Logo Starfashion" width="100" height="24">
    </div>
  </div>
</nav>
<title>Checklist Mesin</title>
  </head>
  <body>
  <h1><center>Band Knife Machine<center></h1>
<div class="card" style="margin:20px;">
  <div class="card-header">Details</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Serial Number : {{ $data_bandknife ->serial_number }}</h5>
        <p class="card-text">Tipe : {{ $data_bandknife ->tipe }}</p>
        <p class="card-text">Label : {{ $data_bandknife ->label }}</p>
        <p class="card-text">Merk Mesin : {{ $data_bandknife ->merk_mesin }}</p>
        <p class="card-text">Bagian : {{ $data_bandknife ->bagian }}</p>
        <p class="card-text">Tahun : {{ $data_bandknife->tahun }}</p>
        <p class="card-text">Check Electrical Instalasi (Bulanan) : {{ $data_bandknife ->check_electrical_instalasi_bulanan }}</p>
        <p class="card-text">Check Motor Bearing Pully (Bulanan) : {{ $data_bandknife ->check_motor_bearing_pully_bulanan }}</p>
        <p class="card-text">Check Kekencangan Pisau (Bulanan): {{ $data_bandknife ->check_kekencangan_pisau_bulanan }}</p>
        <p class="card-text">Check Pully Atas Bearing (Bulanan) : {{ $data_bandknife ->check_pullyatas_bearing_bulanan }}</p>
        <p class="card-text">Check Gerinda/Asahan Pisau (Bulanan) : {{ $data_bandknife ->check_gerinda_asahan_pisau_bulanan }}</p>
        <p class="card-text">Check Dinamo Kompresor (Bulanan) : {{ $data_bandknife ->check_dinamo_kompresor_bulanan }}</p> 
        <p class="card-text">Dicek Tanggal: {{ $data_bandknife ->dicek_tanggal }}</p>
        <p class="card-text">Tahun Pembelian : {{ $data_bandknife ->tahun_pembelian }}</p>
        <p class="card-text">Perbaikan Electrical Instalasi (Harian) : {{ $data_bandknife ->perbaikan_electrical_instalasi_harian }}</p>
        <p class="card-text">Ganti/Perbaikan Motor Bearing Pully (Harian): {{ $data_bandknife ->ganti_perbaikan_motor_bearing_pully_harian }}</p>
        <p class="card-text">Ganti/Perbaikan Pully Atas Bearing (Harian) : {{ $data_bandknife ->ganti_perbaikan_pullyatas_bearing_harian }}</p>
        <p class="card-text">Ganti Gerinda/Asahan Pisau (Harian) : {{ $data_bandknife ->ganti_gerinda_asahan_pisau_harian }}</p>
        <p class="card-text">Ganti/Perbaikan Dinamo Kompresor (Harian) : {{ $data_bandknife ->ganti_perbaikan_dinamo_kompresor_harian }}</p>
        <p class="card-text">Servis Bersihkan Mesin (Harian) : {{ $data_bandknife ->servis_bersihkan_mesin_harian }}</p>
        <p class="card-text">Ganti Sparepart Lainnya (Harian): {{ $data_bandknife ->ganti_sparepart_lainnya_harian }}</p>
        <p class="card-text">Jenis Sparepart yang Diganti : {{$data_bandknife ->sparepart->nama_sparepart ?? 'N/A'}}</p>
        <p class="card-text">Harga Sparepart : {{$data_bandknife ->sparepart->harga_sparepart ?? 'N/A'}}</p>
        <div class= text-center>
        <td><a class="btn btn-warning" href="/tampilbandknife/{{$data_bandknife->serial_number}}" role="button">Update</a>
        <a class="btn btn-danger delete" data-id="{{ $data_bandknife ->serial_number }}" href="#" role="button">Delete</a></td>
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
        window.location = "/deletebandknife/"+serial_number+""
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