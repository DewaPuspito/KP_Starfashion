@extends('layout.admin')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Select the Machines</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->

<div class="container">
  <div class="row">
  <div class="col-sm-6 mb-3">
    <div class="card">
      <div class="card-body">
        <p class="card-text text-center">Sewing Line and Sample Machines</p>
        <a href="/sewing-sample" class="btn btn-primary d-flex justify-content-center">Click Here to View, Add or Update</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <p class="card-text text-center">Cutting Machines</p>
        <a href="/cutting-menu" class="btn btn-primary d-flex justify-content-center">Click Here to View More Options</a>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-6 mb-3">
    <div class="card">
      <div class="card-body">
        <p class="card-text text-center">Metal Detector</p>
        <a href="/metal-detector" class="btn btn-primary d-flex justify-content-center">Click Here to View, Add or Update</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <p class="card-text text-center">Cutter Pattern</p>
        <a href="/pattern" class="btn btn-primary d-flex justify-content-center">Click Here to View, Add or Update</a>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-6 mb-3">
    <div class="card">
      <div class="card-body">
        <p class="card-text text-center">Fabric Warehouse</p>
        <a href="/fabric" class="btn btn-primary d-flex justify-content-center">Click Here to View, Add or Update</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <p class="card-text text-center">Spareparts</p>
        <a href="/sparepart" class="btn btn-primary d-flex justify-content-center">Click Here to View, Add or Update</a>
      </div>
    </div>
  </div>
</div>
@endsection