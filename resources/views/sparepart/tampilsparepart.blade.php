<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <nav class="navbar navbar-dark bg-secondary">
    <div class="container-fluid">
      <a class="navbar-brand" href="/sparepart">Checklist Mesin</a>
      <img src="/images/logo.jpg" alt="Logo Starfashion" width="100" height="24">
    </div>
  </nav>
  <title>Checklist Mesin</title>
</head>

<body>
  <h1>
    <center>Add Item
      <center>
  </h1>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-6">
        <div class="card">
          <div class="card-body">
            <form action="/editsparepart/{{$data_sparepart->id_sparepart}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="mb-3">
                <label for="Input" class="form-label">ID Sparepart</label>
                <input type="text" name="id_sparepart" class="form-control"
                  value="{{$data_sparepart->id_sparepart}}">
              </div>
              <div class="mb-3">
                <label for="Input" class="form-label">Nama Sparepart</label>
                <input type="text" name="nama_sparepart" class="form-control"
                  value="{{$data_sparepart->nama_sparepart}}">
              </div>
              <div class="mb-3">
                <label for="Input" class="form-label">Harga Sparepart</label>
                <input type="number" name="harga_sparepart" class="form-control" id="Input"
                  value="{{$data_sparepart->harga_sparepart}}">
              </div>
              <div class="mb-3">
                <label for="Input" class="form-label">Jumlah Sparepart yang Masuk</label>
                <input type="number" name="jumlah_sparepart_masuk" class="form-control" id="Input"
                  value="{{$data_sparepart->jumlah_sparepart_masuk}}">
              </div>
              <div class="mb-3">
                <label for="Input" class="form-label">Tanggal Masuk</label>
                <input type="date" name="sparepart_masuk" class="form-control" id="Input"
                  value="{{$data_sparepart->sparepart_masuk}}">
              </div>
              <div class="mb-3">
                <label for="Input" class="form-label">Jumlah Sparepart yang Keluar</label>
                <input type="number" name="jumlah_sparepart_keluar" class="form-control" id="Input"
                  value="{{$data_sparepart->jumlah_sparepart_keluar}}">
              </div>
              <div class="mb-3">
                <label for="Input" class="form-label">Tanggal Keluar</label>
                <input type="date" name="sparepart_keluar" class="form-control"
                  value="{{$data_sparepart->sparepart_keluar}}">
              </div>
              <div class="mb-3">
                <label for="Input" class="form-label">Sisa Sparepart</label>
                <input type="number" name="sisa_sparepart" class="form-control" id="inputSisa" disabled>
              </div>
              <div class=text-center>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    $('#inputJumlahMasuk, #inputJumlahKeluar').on('input', function() {
      var jumlahMasuk = parseFloat($('#inputJumlahMasuk').val()) || 0;
      var jumlahKeluar = parseFloat($('#inputJumlahKeluar').val()) || 0;
      var sisaSparepart = jumlahMasuk - jumlahKeluar;
      $('#inputSisa').val(sisaSparepart.toFixed(2));
    });
  });
</script>

</body>
</html>
