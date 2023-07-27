@extends('layout.admin')

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Sparepart</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/main-menu">Back to Menu</a></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->

    <div class="container">
      <div class="row g-3 align-items-center mt-2 mb-3">
        <div class="col-auto">
          <a class="btn btn-success" href="/addsparepart" role="button">Add Item</a>
        </div>
        <div class="col-auto">
          <a class="btn btn-success" href="/exportsparepart" role="button">Export Excel</a>
        </div>
      </div>
      <div class="row g-3 align-items-center mt-2 mb-3">
        <div class="col-auto">
          <label for="input" class="col-form-label">Search</label>
        </div>
        <div class="col-auto">
          <form action="/sparepart" method="GET">
            <input type="text" id="input" name="search" class="form-control">
          </form>
        </div>
      </div>
    </div>

    <div class="row">
      @if ($message = Session::get('success'))
      <div class="alert alert-success" role="alert">
        {{ $message }}
      </div>
      @endif

      <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th scope="col">ID Sparepart</th>
            <th scope="col">Nama Sparepart</th>
            <th scope="col">Harga Sparepart</th>
            <th scope="col">Jumlah Sparepart yang Masuk</th>
            <th scope="col">Tanggal Masuk</th>
            <th scope="col">Jumlah Sparepart yang Keluar</th>
            <th scope="col">Tanggal Keluar</th>
            <th scope="col">Sisa Sparepart</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data_sparepart as $sparepart)
          <tr>
            <th scope="row">{{ $sparepart->id_sparepart }}</th>
            <td>{{ $sparepart->nama_sparepart }}</td>
            <td>{{ $sparepart->harga_sparepart }}</td>
            <td>{{ $sparepart->jumlah_sparepart_masuk }}</td>
            <td>{{ $sparepart->sparepart_masuk }}</td>
            <td>{{ $sparepart->jumlah_sparepart_keluar }}</td>
            <td>{{ $sparepart->sparepart_keluar }}</td>
            <td>{{ $sparepart->sisa_sparepart }}</td>
            <td>
              <a class="btn btn-secondary" href="/historysparepart/{{$sparepart->id_sparepart}}" role="button">See History</a>
              <a class="btn btn-warning" href="/tampilsparepart/{{ $sparepart->id_sparepart }}" role="button">Update</a>
              <a class="btn btn-danger delete" data-id="{{ $sparepart->id_sparepart }}" href="#" role="button">Delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{ $data_sparepart->links() }}
    </div>
  </div>
</div>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.0.slim.js" integrity="sha256-7GO+jepT9gJe9LB4XFf8snVOjX3iYNb0FHYr5LI1N5c=" crossorigin="anonymous"></script>
<script>
  $('.delete').click(function() {
    var id_sparepart = $(this).attr('data-id')
    swal({
        title: "Yakin ingin menghapus?",
        text: "Setelah dihapus, data tidak akan bisa dikembalikan lagi!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          window.location = "/deletesparepart/" + id_sparepart + ""
          swal("Data berhasil dihapus", {
            icon: "success",
          });
        } else {
          swal("Data tidak jadi dihapus");
        }
      });
  });
</script>
@endsection
