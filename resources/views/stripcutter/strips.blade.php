@extends('layout.admin')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Strip Cutter</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/cutting-menu">Back to Cutting Menu</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    <div class="container">
    <div class="row g-3 align-items-center mt-2 mb-3">
    <div class="col-auto">
    <a class="btn btn-success" href="/addstrip" role="button">Add Item</a>
    </div>
      <div class="col-auto">
        <a class="btn btn-success" href="/exportstrip" role="button">Export Excel</a>
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
      <th scope="col">Indikator Kesehatan Mesin</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data_strip as $strip )
    <tr>
      <th scope="row">{{$strip->serial_number}}</th>
      <td>{{$strip ->tipe}}</td>
      <td>{{$strip ->merk_mesin}}</td>
      <td>{{$strip ->bagian}}</td>
      <td>{{$strip ->tahun_pembelian}}</td>
      <td>{{$strip ->sparepart->sparepart_keluar ?? 'N/A'}}</td>
      <td>{{$strip ->sparepart->nama_sparepart ?? 'N/A'}}</td>
      <td>{{$strip ->sparepart->harga_sparepart ?? 'N/A'}}</td>
      <td>{{$strip ->indikator_mesin}}</td>
      <td><a class="btn btn-info" href="/showstrip/{{$strip->serial_number}}" role="button">Details</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
</div>
@endsection