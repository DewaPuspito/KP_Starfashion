@extends('layout.admin')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Sewing and Sample Machine</h1>
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
    <a class="btn btn-success" href="/addsewingsample" role="button">Add Item</a>
    <form action="/search" method="GET">
    <div class="row g-3 align-items-center mt-2 mb-3">
        <div class="col-auto">
            <label for="search" class="col-form-label">Search by:</label>
        </div>
        <div class="col-auto">
            <select name="searchType" id="searchType" class="form-control">
                <option value="serial_number">Serial Number</option>
                <option value="type">Tipe</option>
                <option value="jenis">Jenis Mesin</option>
                <option value="bagian">Bagian</option>
                <option value="sparepart-diganti">Sparepart Diganti</option>
            </select>
        </div>
        <div class="col-auto">
            <input type="search" name="search" id="search" class="form-control" aria-describedby="searchHelpInline">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary">Search</button>
        </div>
        <div class="col-auto">
          <a class="btn btn-success" href="/exportsewingsample" role="button">Export Excel</a>
        </div>
      </div>
    </form>
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
      <th scope="col">Jenis Mesin</th>
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
    @foreach ($data_sewingsample as $sewingsample )
    <tr>
      <th scope="row">{{$sewingsample->serial_number}}</th>
      <td>{{$sewingsample ->tipe}}</td>
      <td>{{$sewingsample ->jenis_mesin}}</td>
      <td>{{$sewingsample ->merk_mesin}}</td>
      <td>{{$sewingsample ->bagian}}</td>
      <td>{{$sewingsample ->tahun_pembelian}}</td>
      <td>{{$sewingsample ->tanggal_sparepart_diganti}}</td>
      <td>{{$sewingsample ->sparepart->nama_sparepart ?? 'N/A'}}</td>
      <td>{{$sewingsample ->sparepart->harga_sparepart ?? 'N/A'}}</td>
      <td><a class="btn btn-info" href="/showsewingsample/{{$sewingsample->serial_number}}" role="button">Details</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
</body>
</html>
