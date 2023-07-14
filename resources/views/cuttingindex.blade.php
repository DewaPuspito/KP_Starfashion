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
        <p class="card-text text-center">KM Machine</p>
        <a href="/km-cutting" class="btn btn-primary d-flex justify-content-center">Click Here to View, Add or Update</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <p class="card-text text-center">Band Knife Machine</p>
        <a href="/band-knife" class="btn btn-primary d-flex justify-content-center">Click Here to View, Add or Update</a>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-6 mb-3">
    <div class="card">
      <div class="card-body">
        <p class="card-text text-center">Plotter</p>
        <a href="/plotter" class="btn btn-primary d-flex justify-content-center">Click Here to View, Add or Update</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <p class="card-text text-center">Fuse Machine</p>
        <a href="/fuse" class="btn btn-primary d-flex justify-content-center">Click Here to View, Add or Update</a>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-6 mb-3">
    <div class="card">
      <div class="card-body">
        <p class="card-text text-center">Rewinding Pipping</p>
        <a href="/pipping" class="btn btn-primary d-flex justify-content-center">Click Here to View, Add or Update</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6 mb-3">
    <div class="card">
      <div class="card-body">
        <p class="card-text text-center">Strip Cutter</p>
        <a href="/strip" class="btn btn-primary d-flex justify-content-center">Click Here to View, Add or Update</a>
      </div>
    </div>
  </div>
</div>
@endsection

   