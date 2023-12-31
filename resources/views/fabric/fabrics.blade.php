@extends('layout.admin')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Fabric Warehouse</h1>
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
    <a class="btn btn-success" href="/addfabric" role="button">Add Item</a>
    </div>
      <div class="col-auto">
        <a class="btn btn-success" href="/exportfabric" role="button">Export Excel</a>
      </div>
    </div>

    @if ($message = Session::get('success'))
      <div class="alert alert-success" role="alert">
        {{ $message }}
      </div>
      @endif
      
    <table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th scope="col">Serial Number</th>
      <th scope="col">Tipe</th>
      <th scope="col">Merk Mesin</th>
      <th scope="col">Bagian</th>
      <th scope="col">Tahun Pembelian</th>
      <th scope="col">Tanggal Sparepart Diganti</th>
      <th scope="col">Jenis Sparepart yang Diganti</th>
      <th scope="col">Harga Sparepart</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data_fabric as $fabric )
    <tr>
      <th scope="row">{{$fabric->serial_number}}</th>
      <td>{{$fabric ->tipe}}</td>
      <td>{{$fabric ->merk_mesin}}</td>
      <td>{{$fabric ->bagian}}</td>
      <td>{{$fabric ->tahun_pembelian}}</td>
      <td>{{$fabric->sparepart->sparepart_keluar ?? 'N/A'}}</td>
      <td>{{$fabric ->sparepart->nama_sparepart ?? 'N/A'}}</td>
      <td>{{$fabric ->sparepart->harga_sparepart ?? 'N/A'}}</td>
      <td><a class="btn btn-info" href="/showfabric/{{$fabric->serial_number}}" role="button">Details</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
</div>
@endsection