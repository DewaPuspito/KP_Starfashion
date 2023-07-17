@extends('layout.admin')

@section('content')

@php
    $dateNow = now();
    $monthNow = $dateNow->format('Y-m');
    $jumlahJahitanLoncat = \App\Models\SewingSample::whereNotNull('jahitan_loncat_harian')
    ->whereMonth('jahitan_loncat_harian', $dateNow->format('m'))
    ->whereYear('jahitan_loncat_harian', $dateNow->format('Y'))
    ->count();
    $jumlahBenangPutusan= \App\Models\SewingSample::whereNotNull('benang_putusan_harian')
    ->whereMonth('benang_putusan_harian', $dateNow->format('m'))
    ->whereYear('benang_putusan_harian', $dateNow->format('Y'))
    ->count();
    $jumlahGantiGuntingPisau= \App\Models\SewingSample::whereNotNull('ganti_gunting_pisau_harian')
    ->whereMonth('ganti_gunting_pisau_harian', $dateNow->format('m'))
    ->whereYear('ganti_gunting_pisau_harian', $dateNow->format('Y'))
    ->count();
    $jumlahGantiRotary= \App\Models\SewingSample::whereNotNull('ganti_rotary_harian')
    ->whereMonth('ganti_rotary_harian', $dateNow->format('m'))
    ->whereYear('ganti_rotary_harian', $dateNow->format('Y'))
    ->count();
    $jumlahGantiSuttelHook = \App\Models\SewingSample::whereNotNull('ganti_suttel_hook_harian')
    ->whereMonth('ganti_suttel_hook_harian', $dateNow->format('m'))
    ->whereYear('ganti_suttel_hook_harian', $dateNow->format('Y'))
    ->count();
    $jumlahBakMesin= \App\Models\SewingSample::whereNotNull('bersihkan_bak_mesin_harian')
    ->whereMonth('bersihkan_bak_mesin_harian', $dateNow->format('m'))
    ->whereYear('bersihkan_bak_mesin_harian', $dateNow->format('Y'))
    ->count();
    $jumlahPisauTidakMotong = \App\Models\SewingSample::whereNotNull('pisau_tidak_motong_harian')
    ->whereMonth('pisau_tidak_motong_harian', $dateNow->format('m'))
    ->whereYear('pisau_tidak_motong_harian', $dateNow->format('Y'))
    ->count();
    $jumlahKebersihanMesin= \App\Models\SewingSample::whereNotNull('kebersihan_mesin_harian')
    ->whereMonth('kebersihan_mesin_harian', $dateNow->format('m'))
    ->whereYear('kebersihan_mesin_harian', $dateNow->format('Y'))
    ->count();
    $jumlahGantiSparepartLainnya= \App\Models\SewingSample::whereNotNull('ganti_sparepart_lainnya_harian')
    ->whereMonth('ganti_sparepart_lainnya_harian', $dateNow->format('m'))
    ->whereYear('ganti_sparepart_lainnya_harian', $dateNow->format('Y'))
    ->count();
    $jumlahKondisiMinyakMesin= \App\Models\SewingSample::whereNotNull('cek_kondisi_minyak_mesin_harian')
    ->whereMonth('cek_kondisi_minyak_mesin_harian', $dateNow->format('m'))
    ->whereYear('cek_kondisi_minyak_mesin_harian', $dateNow->format('Y'))
    ->count();
@endphp

@if ($dateNow->format('d') === '01')
    @php
      $jumlahJahitanLoncat = 0;
      $jumlahBenangPutusan = 0;
      $jumlahGantiGuntingPisau = 0;
      $jumlahGantiRotary = 0;
      $jumlahGantiSuttelHook = 0;
      $jumlahBakMesin = 0;
      $jumlahPisauTidakMotong = 0;
      $jumlahKebersihanMesin = 0;
      $jumlahKondisiMinyakMesin = 0;
      $jumlahGantiSparepartLainnya = 0;
    @endphp
@endif

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2 justify-content-end">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
        <div>
        <a href="/dashboardexport" class="card-link">Export to Excel</a>
        </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $jumlahJahitanLoncat }}</h3>
                  <p>Jahitan Loncat (Sewing)</p>
                </div>
          </div>
      </div>
      <!-- ./col -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $jumlahBenangPutusan }}</h3>
                  <p>Benang Putusan (Sewing)</p>
            </div>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $jumlahGantiGuntingPisau }}</h3>
                  <p>Ganti Gunting/Pisau (Sewing)</p>
            </div>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{ $jumlahGantiRotary }}</h3>
                  <p>Ganti Rotary (Sewing)</p>
            </div>
        </div>
      </div>
      </div>
      <div class="row">
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $jumlahGantiSuttelHook }}</h3>
                  <p>Ganti Suttel Hook (Sewing)</p>
            </div>
        </div>
      </div>
      <!-- ./col -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $jumlahBakMesin }}</h3>
                  <p>Bersihkan Bak Mesin (Sewing)</p>
            </div>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $jumlahPisauTidakMotong }}</h3>
                  <p>Pisau Tidak Motong (Sewing)</p>
            </div>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{ $jumlahKebersihanMesin }}</h3>
                  <p>Kebersihan Mesin (Sewing)</p>
            </div>
        </div>
      </div>
      </div>
      <div class="row">
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
              <h3>{{ $jumlahKondisiMinyakMesin }}</h3>
                  <p>Cek Kondisi Minyak Mesin (Sewing)</p>
            </div>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $jumlahGantiSparepartLainnya }}</h3>
                  <p>Ganti Sparepart Lainnya (Sewing)</p>
            </div>
        </div>
      </div>
      </div> 
        <!-- /.row -->
@endsection