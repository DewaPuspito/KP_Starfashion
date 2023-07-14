@extends('layout.admin')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Cutter Pattern</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/main-menu">Back to Menu</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
     
    <div class="container">
    <div class="row g-3 align-items-center mt-2 mb-3">
    <div class="col-auto">
    <a class="btn btn-success" href="/addpattern" role="button">Add Item</a>
    </div>
      <div class="col-auto">
        <a class="btn btn-success" href="/exportpattern" role="button">Export Excel</a>
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
      <th scope="col">Indikator Kesehatan Mesin</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data_pattern as $pattern)
    <tr>
      <th scope="row">{{$pattern->serial_number}}</th>
      <td>{{$pattern->tipe}}</td>
      <td>{{$pattern ->merk_mesin}}</td>
      <td>{{$pattern ->bagian}}</td>
      <td>{{$pattern ->tahun_pembelian}}</td>
      <td>{{$pattern ->sparepart->sparepart_keluar ?? 'N/A'}}</td>
      <td>{{$pattern ->sparepart->nama_sparepart ?? 'N/A'}}</td>
      <td>{{$pattern ->sparepart->harga_sparepart ?? 'N/A'}}</td>
      <td>{{$pattern ->indikator_mesin}}</td>
      <td><a class="btn btn-info" href="/showpattern/{{$pattern ->serial_number}}" role="button">Details</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
</div>
@endsection