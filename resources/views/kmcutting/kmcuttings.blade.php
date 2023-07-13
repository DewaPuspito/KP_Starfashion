@extends('layout.admin')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">KM Cutting</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/cutting-menu">Back to Menu</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    <div class="container">
    <div class="row g-3 align-items-center mt-2 mb-3">
      <div class="col-auto">
        <a class="btn btn-success" href="/addkmcutting" role="button">Add Item</a>
        <a class="btn btn-success" href="/exportkmcutting" role="button">Export Excel</a>
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
    @foreach ($data_km_cutting as $km_cutting)
    <tr>
      <th scope="row">{{$km_cutting->serial_number}}</th>
      <td>{{$km_cutting->tipe}}</td>
      <td>{{$km_cutting ->merk_mesin}}</td>
      <td>{{$km_cutting ->bagian}}</td>
      <td>{{$km_cutting ->tahun_pembelian}}</td>
      <td>{{$km_cutting ->tanggal_sparepart_diganti}}</td>
      <td>{{$km_cutting ->sparepart->nama_sparepart ?? 'N/A'}}</td>
      <td>{{$km_cutting ->sparepart->harga_sparepart ?? 'N/A'}}</td>
      <td><a class="btn btn-info" href="/showkmcutting/{{$km_cutting ->serial_number}}" role="button">Details</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
</div>
@endsection