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
      <a class="navbar-brand" href="/sewing-sample">Checklist Mesin</a>
      <img src="/images/logo.jpg" alt="Logo Starfashion" width="100" height="24">
      </div>
    </div>
  </nav>
  <title>Checklist Mesin</title>
    </head>
    <body>
    <h1><center>Sewing Line and Sample Machines<center></h1>
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
          <h5 class="card-title">Serial Number : {{ $data_sewingsample->serial_number }}</h5>
          <p class="card-text">Tipe : {{ $data_sewingsample ->tipe }}</p>
          <p class="card-text">Label : {{ $data_sewingsample ->label }}</p>
          <p class="card-text">Jenis Mesin : {{ $data_sewingsample ->jenis_mesin }}</p>
          <p class="card-text">Merk Mesin : {{ $data_sewingsample ->merk_mesin }}</p>
          <p class="card-text">Bagian : {{ $data_sewingsample ->bagian }}</p>
          <p class="card-text">Tahun : {{ $data_sewingsample->tahun }}</p>
          <p class="card-text">Check Bobbin Case (Bulanan) : {{ $data_sewingsample ->check_bobin_chase_bulanan }}</p>
          <p class="card-text">Needle Guard (Bulanan) : {{ $data_sewingsample ->needle_guard_bulanan }}</p>
          <p class="card-text">Check Belt Cover (Bulanan): {{ $data_sewingsample ->check_belt_cover_bulanan }}</p>
          <p class="card-text">Check Wheels Machine (Bulanan) : {{ $data_sewingsample ->check_wheels_machine_bulanan }}</p>
          <p class="card-text">Check Dinamo Guard (Bulanan) : {{ $data_sewingsample ->check_dinamo_guard_bulanan }}</p>
          <p class="card-text">Cleanliness (Bulanan) : {{ $data_sewingsample ->cleanliness_bulanan }}</p>
          <p class="card-text">Check Oli (Bulanan) : {{ $data_sewingsample ->check_oil_bulanan}}</p>
          <p class="card-text">Check Menggunakan Magnet Pen (Bulanan) : {{ $data_sewingsample ->check_magnet_pen_bulanan }}</p>
          <p class="card-text">Ganti Oli (Bulanan) : {{ $data_sewingsample ->replace_oil_bulanan }}</p>
          <p class="card-text">Check Bak Mesin (Bulanan) : {{ $data_sewingsample ->check_bak_mesin_bulanan }}</p>
          <p class="card-text">Check Tiang Benang (Bulanan) : {{ $data_sewingsample ->check_tiang_benang_bulanan }}</p>
          <p class="card-text">Check Spring Tension (Bulanan) : {{ $data_sewingsample ->check_spring_tension_bulanan }}</p>
          <p class="card-text">Check Jalur Benang (Bulanan) : {{ $data_sewingsample ->check_jalur_benang_bulanan }}</p>
          <p class="card-text">Pengecekan Bulanan dilakukan Tanggal : {{ $data_sewingsample ->dicek_tanggal }}</p>
          <p class="card-text">Tahun Pembelian : {{ $data_sewingsample ->tahun_pembelian }}</p>
          <p class="card-text">Jahitan Loncat (Harian) : {{ $data_sewingsample ->jahitan_loncat_harian }}</p>
          <p class="card-text">Benang Putusan (Harian): {{ $data_sewingsample ->benang_putusan_harian }}</p>
          <p class="card-text">Ganti Gunting/Pisau (Harian) : {{ $data_sewingsample ->ganti_gunting_pisau_harian }}</p>
          <p class="card-text">Ganti Rotary (Harian) : {{ $data_sewingsample ->ganti_rotary_harian }}</p>
          <p class="card-text">Ganti Suttel Hook (Harian) : {{ $data_sewingsample ->ganti_suttel_hook_harian }}</p>
          <p class="card-text">Gulungan Spull (Harian) : {{ $data_sewingsample ->gulungan_spull_harian }}</p>
          <p class="card-text">Ganti Needle Plate (Harian) : {{ $data_sewingsample ->ganti_needle_plate_harian }}</p>
          <p class="card-text">Setel Timming (Harian) : {{ $data_sewingsample ->setel_timming_harian }}</p>
          <p class="card-text">Bersihkan Bak Mesin (Harian) : {{ $data_sewingsample ->bersihkan_bak_mesin_harian}}</p>
          <p class="card-text">Pisau Tidak Motong (Harian) : {{ $data_sewingsample ->pisau_tidak_motong_harian }}</p>
          <p class="card-text">Cek Angin Kompresor (Harian) : {{ $data_sewingsample ->cek_angin_kompresor_harian}}</p>
          <p class="card-text">Kebersihan Mesin (Harian) : {{ $data_sewingsample ->kebersihan_mesin_harian}}</p>
          <p class="card-text">Cek Kondisi Minyak Mesin (Harian) : {{ $data_sewingsample ->cek_kondisi_minyak_mesin_harian }}</p>
          <p class="card-text">Ganti Sparepart Lainnya (Harian) : {{ $data_sewingsample ->ganti_sparepart_lainnya_harian }}</p>
          <p class="card-text">Jenis Sparepart yang Diganti : {{$data_sewingsample ->sparepart->nama_sparepart ?? 'N/A'}}</p>
          <p class="card-text">Harga Sparepart : {{$data_sewingsample ->sparepart->harga_sparepart ?? 'N/A'}}</p>
          <p class="card-text">Indikator Kesehatan Mesin : {{ $data_sewingsample ->indikator_mesin }}</p>
          <div class= text-center>
          <td><a class="btn btn-secondary" href="/historysewingsample/{{$data_sewingsample->serial_number}}" role="button">See History</a>
          <a class="btn btn-warning" href="/tampilsewingsample/{{$data_sewingsample->serial_number}}" role="button">Update</a>
          <a class="btn btn-danger delete" data-id = "{{ $data_sewingsample->serial_number }}" href="#" role="button">Delete</a></td>
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
          window.location = "/deletesewingsample/"+serial_number+""
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