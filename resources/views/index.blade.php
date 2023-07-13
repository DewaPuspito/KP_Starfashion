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
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->

<div class="container">
  <div class="row">
  <div class="col-sm-6 mb-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center">Sewing Line and Sample Machines</h5>
        <p class="card-text text-center">Machines Used for Sewing and Sampling Process</p>
        <a href="/sewing-sample" class="btn btn-primary d-flex justify-content-center">Click Here to View, Add or Update</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center">Cutting Machines</h5>
        <p class="card-text text-center">Machines Used for Cutting Process</p>
        <a href="/cutting-menu" class="btn btn-primary d-flex justify-content-center">Click Here to View More Options</a>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-6 mb-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center">Metal Detector</h5>
        <p class="card-text text-center">Metal Detector for Finishing Process</p>
        <a href="/metal-detector" class="btn btn-primary d-flex justify-content-center">Click Here to View, Add or Update</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center">Cutter Pattern</h5>
        <p class="card-text text-center">Cutter Pattern for Sampling Process</p>
        <a href="/pattern" class="btn btn-primary d-flex justify-content-center">Click Here to View, Add or Update</a>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-6 mb-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center">Fabric Warehouse</h5>
        <p class="card-text text-center">Warehouse for Checking Fabric</p>
        <a href="/fabric" class="btn btn-primary d-flex justify-content-center">Click Here to View, Add or Update</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center">Spareparts</h5>
        <p class="card-text text-center">Sparepart Collection</p>
        <a href="/sparepart" class="btn btn-primary d-flex justify-content-center">Click Here to View, Add or Update</a>
      </div>
    </div>
  </div>
</div>
@endsection