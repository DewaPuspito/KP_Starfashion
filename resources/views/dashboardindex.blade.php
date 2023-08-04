@extends('layout.admin')

@section('content')

@php
    $dateNow = now();
    $monthNow = $dateNow->format('Y-m');
    $jumlahJahitanLoncat = \App\Models\SewingSample::whereNotNull('jahitan_loncat_harian')
    ->whereMonth('jahitan_loncat_harian', $dateNow->format('m'))
    ->whereYear('jahitan_loncat_harian', $dateNow->format('Y'))
    ->count();

    $jumlahBenangPutusan = \App\Models\SewingSample::whereNotNull('benang_putusan_harian')
    ->whereMonth('benang_putusan_harian', $dateNow->format('m'))
    ->whereYear('benang_putusan_harian', $dateNow->format('Y'))
    ->count();

    $jumlahGantiGuntingPisau = \App\Models\SewingSample::whereNotNull('ganti_gunting_pisau_harian')
    ->whereMonth('ganti_gunting_pisau_harian', $dateNow->format('m'))
    ->whereYear('ganti_gunting_pisau_harian', $dateNow->format('Y'))
    ->count();

    $jumlahGantiRotary = \App\Models\SewingSample::whereNotNull('ganti_rotary_harian')
    ->whereMonth('ganti_rotary_harian', $dateNow->format('m'))
    ->whereYear('ganti_rotary_harian', $dateNow->format('Y'))
    ->count();

    $jumlahGantiSuttelHook = \App\Models\SewingSample::whereNotNull('ganti_suttel_hook_harian')
    ->whereMonth('ganti_suttel_hook_harian', $dateNow->format('m'))
    ->whereYear('ganti_suttel_hook_harian', $dateNow->format('Y'))
    ->count();

    $jumlahBakMesin = \App\Models\SewingSample::whereNotNull('bersihkan_bak_mesin_harian')
    ->whereMonth('bersihkan_bak_mesin_harian', $dateNow->format('m'))
    ->whereYear('bersihkan_bak_mesin_harian', $dateNow->format('Y'))
    ->count();

    $jumlahPisauTidakMotong = \App\Models\SewingSample::whereNotNull('pisau_tidak_motong_harian')
    ->whereMonth('pisau_tidak_motong_harian', $dateNow->format('m'))
    ->whereYear('pisau_tidak_motong_harian', $dateNow->format('Y'))
    ->count();

    $jumlahKondisiMinyakMesin = \App\Models\SewingSample::whereNotNull('cek_kondisi_minyak_mesin_harian')
    ->whereMonth('cek_kondisi_minyak_mesin_harian', $dateNow->format('m'))
    ->whereYear('cek_kondisi_minyak_mesin_harian', $dateNow->format('Y'))
    ->count();

    $jumlahGantiSparepartLainnya = \App\Models\SewingSample::whereNotNull('ganti_sparepart_lainnya_harian')
    ->whereMonth('ganti_sparepart_lainnya_harian', $dateNow->format('m'))
    ->whereYear('ganti_sparepart_lainnya_harian', $dateNow->format('Y'))
    ->count();

    $jumlahKM = \App\Models\KM::whereNotNull('serial_number')->count();

    $jumlahBandKnife= \App\Models\BandKnife::whereNotNull('serial_number')->count();

    $jumlahPlotter = \App\Models\Plotter::whereNotNull('serial_number')->count();

    $jumlahFuse = \App\Models\Fuse::whereNotNull('serial_number')->count();

    $jumlahPipping = \App\Models\Pipping::whereNotNull('serial_number')->count();

    $jumlahStrip = \App\Models\Strip::whereNotNull('serial_number')->count();

    $jumlahFabric = \App\Models\Fabric::whereNotNull('serial_number')->count();
    
    $jumlahMetal = \App\Models\MetalDetector::whereNotNull('serial_number')->count();

    $jumlahPattern = \App\Models\Pattern::whereNotNull('serial_number')->count();

    $jumlahLine1 = \App\Models\SewingSample::where('bagian', 'LINE 01')->count();

    $jumlahLine2 = \App\Models\SewingSample::where('bagian', 'LINE 02')->count();

    $jumlahLine3 = \App\Models\SewingSample::where('bagian', 'LINE 03')->count();

    $jumlahLine4 = \App\Models\SewingSample::where('bagian', 'LINE 04')->count();

    $jumlahLine5 = \App\Models\SewingSample::where('bagian', 'LINE 05')->count();

    $jumlahLine6 = \App\Models\SewingSample::where('bagian', 'LINE 06')->count();

    $jumlahLine7 = \App\Models\SewingSample::where('bagian', 'LINE 07')->count();

    $jumlahLine8 = \App\Models\SewingSample::where('bagian', 'LINE 08')->count();

    $jumlahLine9 = \App\Models\SewingSample::where('bagian', 'LINE 09')->count();

    $jumlahLine10 = \App\Models\SewingSample::where('bagian', 'LINE 10')->count();

    $jumlahLine11 = \App\Models\SewingSample::where('bagian', 'LINE 11')->count();

    $jumlahLine12 = \App\Models\SewingSample::where('bagian', 'LINE 12')->count();

    $jumlahLine13 = \App\Models\SewingSample::where('bagian', 'LINE 13')->count();

    $jumlahLine14 = \App\Models\SewingSample::where('bagian', 'LINE 14')->count();

    $jumlahLine15 = \App\Models\SewingSample::where('bagian', 'LINE 15')->count();

    $jumlahLine16 = \App\Models\SewingSample::where('bagian', 'LINE 16')->count();

    $jumlahLine17 = \App\Models\SewingSample::where('bagian', 'LINE 17')->count();

    $jumlahLine18 = \App\Models\SewingSample::where('bagian', 'LINE 18')->count();

    $jumlahLine19 = \App\Models\SewingSample::where('bagian', 'LINE 19')->count();

    $jumlahLine20 = \App\Models\SewingSample::where('bagian', 'LINE 20')->count();

    $jumlahSample = \App\Models\SewingSample::where('bagian', 'SAMPLE')->count();

    $jumlahMekanik = \App\Models\SewingSample::where('bagian', 'GUDANG MEKANIK')->count();

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
            <div class="small-box bg-primary">
              <div class="inner">
                <h3>{{ $jumlahLine1 }}</h3>
                  <p>Jumlah Mesin pada Sewing Line 01</p>
                </div>
                <a href="/sewing-sample?line1=bagian" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
      </div>
      <!-- ./col -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-primary">
              <div class="inner">
                <h3>{{ $jumlahLine2 }}</h3>
                  <p>Jumlah Mesin pada Sewing Line 02</p>
            </div>
            <a href="/sewing-sample?line2=bagian" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
            <div class="small-box bg-primary">
              <div class="inner">
                <h3>{{ $jumlahLine3 }}</h3>
                  <p>Jumlah Mesin pada Sewing Line 03</p>
            </div>
            <a href="/sewing-sample?line3=bagian" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
            <div class="small-box bg-primary">
              <div class="inner">
                <h3>{{ $jumlahLine4}}</h3>
                  <p>Jumlah Mesin pada Sewing Line 04</p>
            </div>
            <a href="/sewing-sample?line4=bagian" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      </div>
      <div class="row">
            <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $jumlahLine5 }}</h3>
                  <p>Jumlah Mesin pada Sewing Line 05</p>
                </div>
                <a href="/sewing-sample?line5=bagian" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
      </div>
      <!-- ./col -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $jumlahLine6}}</h3>
                  <p>Jumlah Mesin pada Sewing Line 06</p>
            </div>
            <a href="/sewing-sample?line6=bagian" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $jumlahLine7 }}</h3>
                  <p>Jumlah Mesin pada Sewing Line 07</p>
            </div>
            <a href="/sewing-sample?line7=bagian" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $jumlahLine8 }}</h3>
                  <p>Jumlah Mesin pada Sewing Line 08</p>
            </div>
            <a href="/sewing-sample?line8=bagian" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      </div>
      <div class="row">
            <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $jumlahLine9 }}</h3>
                  <p>Jumlah Mesin pada Sewing Line 09</p>
                </div>
                <a href="/sewing-sample?line9=bagian" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
      </div>
      <!-- ./col -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $jumlahLine10 }}</h3>
                  <p>Jumlah Mesin pada Sewing Line 10</p>
            </div>
            <a href="/sewing-sample?line10=bagian" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $jumlahLine11 }}</h3>
                  <p>Jumlah Mesin pada Sewing Line 11</p>
            </div>
            <a href="/sewing-sample?line11=bagian" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $jumlahLine12 }}</h3>
                  <p>Jumlah Mesin pada Sewing Line 12</p>
            </div>
            <a href="/sewing-sample?line12=bagian" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      </div>
      <div class="row">
            <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $jumlahLine13 }}</h3>
                  <p>Jumlah Mesin pada Sewing Line 13</p>
                </div>
                <a href="/sewing-sample?line13=bagian" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
      </div>
      <!-- ./col -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $jumlahLine14 }}</h3>
                  <p>Jumlah Mesin pada Sewing Line 14</p>
            </div>
            <a href="/sewing-sample?line14=bagian" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $jumlahLine15 }}</h3>
                  <p>Jumlah Mesin pada Sewing Line 15</p>
            </div>
            <a href="/sewing-sample?line15=bagian" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $jumlahLine16 }}</h3>
                  <p>Jumlah Mesin pada Sewing Line 16</p>
            </div>
            <a href="/sewing-sample?line16=bagian" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      </div>
      <div class="row">
            <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{ $jumlahLine17 }}</h3>
                  <p>Jumlah Mesin pada Sewing Line 17</p>
                </div>
                <a href="/sewing-sample?line17=bagian" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
      </div>
      <!-- ./col -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{ $jumlahLine18 }}</h3>
                  <p>Jumlah Mesin pada Sewing Line 18</p>
            </div>
            <a href="/sewing-sample?line18=bagian" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{ $jumlahLine19 }}</h3>
                  <p>Jumlah Mesin pada Sewing Line 19</p>
            </div>
            <a href="/sewing-sample?line19=bagian" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{ $jumlahLine20 }}</h3>
                  <p>Jumlah Mesin pada Sewing Line 20</p>
            </div>
            <a href="/sewing-sample?line20=bagian" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      </div>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-6">
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3>{{ $jumlahSample }}</h3>
                  <p>Jumlah Mesin pada Sample Room</p>
                </div>
              <a href="/sewing-sample?sample=bagian" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
      </div>
      <!-- ./col -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3>{{ $jumlahMekanik }}</h3>
                  <p>Jumlah Mesin pada Gudang Mekanik</p>
            </div>
          <a href="/sewing-sample?mekanik=bagian" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $jumlahJahitanLoncat }}</h3>
                  <p>Jahitan Loncat (Sewing)</p>
                </div>
              <a href="/sewing-sample?jahitan=jahitan_loncat_harian" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
      </div>
      <!-- ./col -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $jumlahBenangPutusan }}</h3>
                  <p>Benang Putusan (Sewing)</p>
            </div>
          <a href="/sewing-sample?benang=benang_putusan_harian" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $jumlahGantiGuntingPisau }}</h3>
                  <p>Ganti Gunting/Pisau (Sewing)</p>
            </div>
            <a href="/sewing-sample?gunting-pisau=ganti_gunting_pisau_harian" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{ $jumlahGantiRotary }}</h3>
                  <p>Ganti Rotary (Sewing)</p>
            </div>
            <a href="/sewing-sample?rotary=ganti_rotary_harian" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
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
            <a href="/sewing-sample?hook=ganti_suttel_hook_harian" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $jumlahBakMesin }}</h3>
                  <p>Bersihkan Bak Mesin (Sewing)</p>
            </div>
            <a href="/sewing-sample?bak=bersihkan_bak_mesin_harian" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $jumlahPisauTidakMotong }}</h3>
                  <p>Pisau Tidak Motong (Sewing)</p>
            </div>
            <a href="/sewing-sample?pisau=pisau_tidak_motong_harian" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
              <h3>{{ $jumlahKondisiMinyakMesin }}</h3>
                  <p>Cek Minyak Mesin (Sewing)</p>
            </div>
            <a href="/sewing-sample?minyak=cek_kondisi_minyak_mesin_harian" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $jumlahGantiSparepartLainnya }}</h3>
                  <p>Ganti Sparepart Lainnya (Sewing)</p>
            </div>
            <a href="/sewing-sample?sparepart-lainnya=ganti_sparepart_lainnya_harian" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
        <!-- /.row -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-6">
            <div class="small-box bg-dark">
              <div class="inner">
                <h3>{{ $jumlahKM }}</h3>
                  <p>Jumlah Mesin KM Cutting (Cutting)</p>
                </div>
          </div>
      </div>
      <!-- ./col -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-dark">
              <div class="inner">
                <h3>{{ $jumlahBandKnife }}</h3>
                  <p>Jumlah Mesin Band Knife (Cutting)</p>
            </div>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
            <div class="small-box bg-dark">
              <div class="inner">
                <h3>{{ $jumlahPlotter }}</h3>
                  <p>Jumlah Mesin Plotter (Cutting)</p>
            </div>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
            <div class="small-box bg-dark">
              <div class="inner">
                <h3>{{ $jumlahFuse }}</h3>
                  <p>Jumlah Mesin Fuse (Cutting)</p>
            </div>
        </div>
      </div>
      </div>
      <div class="row">
          <div class="col-lg-3 col-6">
            <div class="small-box bg-dark">
              <div class="inner">
                <h3>{{ $jumlahPipping }}</h3>
                  <p>Jumlah Mesin Rewinding Pipping (Cutting)</p>
            </div>
        </div>
      </div>
      <!-- ./col -->
      <!-- ./col -->
      <div class="col-lg-3 col-6">
            <div class="small-box bg-dark">
              <div class="inner">
                <h3>{{ $jumlahStrip }}</h3>
                  <p>Jumlah Mesin Strip Cutter (Cutting)</p>
            </div>
        </div>
      </div>
      <div class="col-lg-3 col-6">
            <div class="small-box bg-dark">
              <div class="inner">
                <h3>{{ $jumlahFabric }}</h3>
                  <p>Jumlah Mesin Fabric (Fabric Warehouse)</p>
            </div>
        </div>
      </div>
      <!-- ./col -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-dark">
              <div class="inner">
              <h3>{{ $jumlahMetal }}</h3>
                  <p>Jumlah Mesin Metal Detector (Finishing)</p>
            </div>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
            <div class="small-box bg-dark">
              <div class="inner">
                <h3>{{ $jumlahPattern }}</h3>
                  <p>Jumlah Mesin Cutter Pattern (Sample)</p>
            </div>
        </div>
      </div>
@endsection