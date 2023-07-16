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
              <li class="breadcrumb-item"><a href="main-menu">Home</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->

<div class="container">
<div class="row">
  <div class="col-sm-6 mb-3">
    <div class="card">
      <div class="card-body">
        <p class="card-text text-center"><strong>KM Machine</strong></p>
        <a href="/km-cutting" class="btn btn-primary d-flex justify-content-center">Click Here to View, Add or Update</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <p class="card-text text-center"><strong>Band Knife Machine</strong></p>
        <a href="/band-knife" class="btn btn-primary d-flex justify-content-center">Click Here to View, Add or Update</a>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-6 mb-3">
    <div class="card">
      <div class="card-body">
        <p class="card-text text-center"><strong>Plotter</strong></p>
        <a href="/plotter" class="btn btn-primary d-flex justify-content-center">Click Here to View, Add or Update</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <p class="card-text text-center"><strong>Fuse Machine</strong></p>
        <a href="/fuse" class="btn btn-primary d-flex justify-content-center">Click Here to View, Add or Update</a>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-6 mb-3">
    <div class="card">
      <div class="card-body">
        <p class="card-text text-center"><strong>Rewinding Pipping</strong></p>
        <a href="/pipping" class="btn btn-primary d-flex justify-content-center">Click Here to View, Add or Update</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6 mb-3">
    <div class="card">
      <div class="card-body">
        <p class="card-text text-center"><strong>Strip Cutter</strong></p>
        <a href="/strip" class="btn btn-primary d-flex justify-content-center">Click Here to View, Add or Update</a>
      </div>
    </div>
  </div>
</div>
@endsection

   