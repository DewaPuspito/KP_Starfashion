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
              <li class="breadcrumb-item"><a href="#">Home</a></li>
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
        <h5 class="card-title text-center">KM Cutting Machine</h5>
        <p class="card-text text-center">KM Machine for Cutting Process</p>
        <a href="/km-cutting" class="btn btn-primary d-flex justify-content-center">Click Here to View, Add or Update</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center">Band Knife Machine</h5>
        <p class="card-text text-center">Band Knife Machine for Cutting Process</p>
        <a href="/band-knife" class="btn btn-primary d-flex justify-content-center">Click Here to View, Add or Update</a>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-6 mb-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center">Plotter</h5>
        <p class="card-text text-center">Plotter for Cutting Process</p>
        <a href="/plotter" class="btn btn-primary d-flex justify-content-center">Click Here to View, Add or Update</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center">Fuse Machine</h5>
        <p class="card-text text-center">Fuse Machine for Cutting Process</p>
        <a href="/fuse" class="btn btn-primary d-flex justify-content-center">Click Here to View, Add or Update</a>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-6 mb-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center">Rewinding Pipping</h5>
        <p class="card-text text-center">Rewinding Pipping for Cutting Process</p>
        <a href="/pipping" class="btn btn-primary d-flex justify-content-center">Click Here to View, Add or Update</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6 mb-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center">Strip Cutter</h5>
        <p class="card-text text-center">Strip Cutter for Cutting Process</p>
        <a href="/strip" class="btn btn-primary d-flex justify-content-center">Click Here to View, Add or Update</a>
      </div>
    </div>
  </div>
</div>
@endsection

   