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
    <a class="navbar-brand" href="/pattern">StarFashion Maintenance</a>
    <img src="/images/logo.jpg" alt="Logo Starfashion" width="100" height="24">
    </div>
  </div>
</nav>
<title>StarFashion Maintenance</title>
  </head>
  <body>
  <h1><center>Cutter Pattern<center></h1>
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
        <h5 class="card-title">Serial Number : {{ $data_pattern ->serial_number }}</h5>
        <p class="card-text">Tipe : {{ $data_pattern ->tipe }}</p>
        <p class="card-text">Label : {{ $data_pattern ->label }}</p>
        <p class="card-text">Merk Mesin : {{ $data_pattern ->merk_mesin }}</p>
        <p class="card-text">Bagian : {{ $data_pattern ->bagian }}</p>
        <p class="card-text">Tahun Pembelian : {{ $data_pattern ->tahun_pembelian }}</p>
        <p class="card-text">Tahun Terkini : {{ $data_pattern ->tahun }}</p>
        <p class="card-text">Pemberian Minyak pada Ril (Bulanan) : {{ $data_pattern ->pemberian_minyak_pada_ril_bulanan}}</p>
        <p class="card-text">Check Pulpen (Bulanan) : {{ $data_pattern ->check_pulpen_bulanan }}</p>
        <p class="card-text">Check Pisau (Bulanan): {{ $data_pattern ->check_pisau_bulanan }}</p>
        <p class="card-text">Check Elektro (Bulanan) : {{ $data_pattern ->check_elektro_bulanan }}</p>
        <p class="card-text">Check Instalasi Kelistrikan (Bulanan) : {{ $data_pattern ->check_instalasi_kelistrikan_bulanan }}</p>
        <p class="card-text">Check Vacum (Bulanan) : {{ $data_pattern ->check_vacum_bulanan }}</p>
        <p class="card-text">Check Belt (Bulanan) : {{ $data_pattern ->check_belt_bulanan }}</p>
        <p class="card-text">Pengecekan Bulanan dilakukan Tanggal: {{ $data_pattern ->dicek_tanggal }}</p>
        <p class="card-text">Pemberian Minyak pada Ril (Harian) : {{ $data_pattern ->pemberian_minyak_pada_ril_harian }}</p>
        <p class="card-text">Ganti Pulpen (Harian): {{ $data_pattern ->ganti_pulpen_harian }}</p>
        <p class="card-text">Ganti Pisau (Harian) : {{ $data_pattern ->ganti_pisau_harian }}</p>
        <p class="card-text">Ganti Komponen Elektro (Harian) : {{ $data_pattern ->ganti_komponen_elektro_harian }}</p>
        <p class="card-text">Ganti Instalasi Kelistrikan (Harian) : {{ $data_pattern ->ganti_instalasi_kelistrikan_harian }}</p>
        <p class="card-text">Ganti Vacum (Harian) : {{ $data_pattern ->ganti_vacum_harian }}</p>
        <p class="card-text">Ganti Belt (Harian): {{ $data_pattern ->ganti_belt_harian }}</p>
        <p class="card-text">Kebersihan Mesin (Harian): {{ $data_pattern ->kebersihan_mesin_harian }}</p>
        <p class="card-text">Tanggal Sparepart Diganti : {{$data_pattern->sparepart->sparepart_keluar ?? 'N/A'}}</p>
        <p class="card-text">Jenis Sparepart yang Diganti : {{$data_pattern ->sparepart->nama_sparepart ?? 'N/A'}}</p>
        <p class="card-text">Harga Sparepart : {{$data_pattern ->sparepart->harga_sparepart ?? 'N/A'}}</p>
        <p class="card-text">Indikator Kesehatan Mesin : {{ $data_pattern ->indikator_mesin }}</p>
        <div class=text-center>
        <td><a class="btn btn-secondary" href="/historypattern/{{$data_pattern->serial_number}}" role="button">See History</a>
        <a class="btn btn-warning" href="/tampilpattern/{{$data_pattern ->serial_number}}" role="button">Update</a>
        <a class="btn btn-danger delete" data-id="{{$data_pattern ->serial_number}}" href="#" role="button">Delete</a></td>
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
        window.location = "/deletepattern/"+serial_number+""
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