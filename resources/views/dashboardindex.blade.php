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
    $jumlahKebersihanMesin = \App\Models\SewingSample::whereNotNull('kebersihan_mesin_harian')
    ->whereMonth('kebersihan_mesin_harian', $dateNow->format('m'))
    ->whereYear('kebersihan_mesin_harian', $dateNow->format('Y'))
    ->count();
    $jumlahKondisiMinyakMesin = \App\Models\SewingSample::whereNotNull('cek_kondisi_minyak_mesin_harian')
    ->whereMonth('cek_kondisi_minyak_mesin_harian', $dateNow->format('m'))
    ->whereYear('cek_kondisi_minyak_mesin_harian', $dateNow->format('Y'))
    ->count();
    $jumlahGantiSparepartLainnya = \App\Models\SewingSample::whereNotNull('ganti_sparepart_lainnya_harian')
    ->whereMonth('ganti_sparepart_lainnya_harian', $dateNow->format('m'))
    ->whereYear('ganti_sparepart_lainnya_harian', $dateNow->format('Y'))
    ->count();
    $jumlahElectricalInstalasi = \App\Models\BandKnife::whereNotNull('perbaikan_electrical_instalasi_harian')
    ->whereMonth('perbaikan_electrical_instalasi_harian', $dateNow->format('m'))
    ->whereYear('perbaikan_electrical_instalasi_harian', $dateNow->format('Y'))
    ->count();
    $jumlahMotorBearingPully = \App\Models\BandKnife::whereNotNull('ganti_perbaikan_motor_bearing_pully_harian')
    ->whereMonth('ganti_perbaikan_motor_bearing_pully_harian', $dateNow->format('m'))
    ->whereYear('ganti_perbaikan_motor_bearing_pully_harian', $dateNow->format('Y'))
    ->count();
    $jumlahPullyAtasBearing = \App\Models\BandKnife::whereNotNull('ganti_perbaikan_pullyatas_bearing_harian')
    ->whereMonth('ganti_perbaikan_pullyatas_bearing_harian', $dateNow->format('m'))
    ->whereYear('ganti_perbaikan_pullyatas_bearing_harian', $dateNow->format('Y'))
    ->count();
    $jumlahGantiGerindaAsahanPisau = \App\Models\BandKnife::whereNotNull('ganti_gerinda_asahan_pisau_harian')
    ->whereMonth('ganti_gerinda_asahan_pisau_harian', $dateNow->format('m'))
    ->whereYear('ganti_gerinda_asahan_pisau_harian', $dateNow->format('Y'))
    ->count();
    $jumlahDinamoKompresor = \App\Models\BandKnife::whereNotNull('ganti_perbaikan_dinamo_kompresor_harian')
    ->whereMonth('ganti_perbaikan_dinamo_kompresor_harian', $dateNow->format('m'))
    ->whereYear('ganti_perbaikan_dinamo_kompresor_harian', $dateNow->format('Y'))
    ->count();
    $jumlahBersihkanMesin = \App\Models\BandKnife::whereNotNull('servis_bersihkan_mesin_harian')
    ->whereMonth('servis_bersihkan_mesin_harian', $dateNow->format('m'))
    ->whereYear('servis_bersihkan_mesin_harian', $dateNow->format('Y'))
    ->count();
    $jumlahGantiSparepartKnife = \App\Models\BandKnife::whereNotNull('ganti_sparepart_lainnya_harian')
    ->whereMonth('ganti_sparepart_lainnya_harian', $dateNow->format('m'))
    ->whereYear('ganti_sparepart_lainnya_harian', $dateNow->format('Y'))
    ->count();
    $jumlahMinyakRil = \App\Models\Pattern::whereNotNull('pemberian_minyak_pada_ril_harian')
    ->whereMonth('pemberian_minyak_pada_ril_harian', $dateNow->format('m'))
    ->whereYear('pemberian_minyak_pada_ril_harian', $dateNow->format('Y'))
    ->count();
    $jumlahPulpen = \App\Models\Pattern::whereNotNull('ganti_pulpen_harian')
    ->whereMonth('ganti_pulpen_harian', $dateNow->format('m'))
    ->whereYear('ganti_pulpen_harian', $dateNow->format('Y'))
    ->count();
    $jumlahPisau = \App\Models\Pattern::whereNotNull('ganti_pisau_harian')
    ->whereMonth('ganti_pisau_harian', $dateNow->format('m'))
    ->whereYear('ganti_pisau_harian', $dateNow->format('Y'))
    ->count();
    $jumlahKomponenElektro = \App\Models\Pattern::whereNotNull('ganti_komponen_elektro_harian')
    ->whereMonth('ganti_komponen_elektro_harian', $dateNow->format('m'))
    ->whereYear('ganti_komponen_elektro_harian', $dateNow->format('Y'))
    ->count();
    $jumlahInstalasiKelistrikan = \App\Models\Pattern::whereNotNull('ganti_instalasi_kelistrikan_harian')
    ->whereMonth('ganti_instalasi_kelistrikan_harian', $dateNow->format('m'))
    ->whereYear('ganti_instalasi_kelistrikan_harian', $dateNow->format('Y'))
    ->count();
    $jumlahVacum = \App\Models\Pattern::whereNotNull('ganti_vacum_harian')
    ->whereMonth('ganti_vacum_harian', $dateNow->format('m'))
    ->whereYear('ganti_vacum_harian', $dateNow->format('Y'))
    ->count();
    $jumlahBelt = \App\Models\Pattern::whereNotNull('ganti_belt_harian')
    ->whereMonth('ganti_belt_harian', $dateNow->format('m'))
    ->whereYear('ganti_belt_harian', $dateNow->format('Y'))
    ->count();
    $jumlahPisauTumpul = \App\Models\KM::whereNotNull('pisau_tumpul_harian')
    ->whereMonth('pisau_tumpul_harian', $dateNow->format('m'))
    ->whereYear('pisau_tumpul_harian', $dateNow->format('Y'))
    ->count();
    $jumlahMinyakHabis = \App\Models\KM::whereNotNull('minyak_habis_harian')
    ->whereMonth('minyak_habis_harian', $dateNow->format('m'))
    ->whereYear('minyak_habis_harian', $dateNow->format('Y'))
    ->count();
    $jumlahAbrasif= \App\Models\KM::whereNotNull('ganti_abrasif_harian')
    ->whereMonth('ganti_abrasif_harian', $dateNow->format('m'))
    ->whereYear('ganti_abrasif_harian', $dateNow->format('Y'))
    ->count();
    $jumlahInstalasiKabel = \App\Models\KM::whereNotNull('check_instalasi_kabel_harian')
    ->whereMonth('check_instalasi_kabel_harian', $dateNow->format('m'))
    ->whereYear('check_instalasi_kabel_harian', $dateNow->format('Y'))
    ->count();
    $jumlahKondisiMesin = \App\Models\KM::whereNotNull('check_kondisi_mesin_harian')
    ->whereMonth('check_kondisi_mesin_harian', $dateNow->format('m'))
    ->whereYear('check_kondisi_mesin_harian', $dateNow->format('Y'))
    ->count();
    $jumlahBeltAtas = \App\Models\Fuse::whereNotNull('ganti_belt_atas_harian')
    ->whereMonth('ganti_belt_atas_harian', $dateNow->format('m'))
    ->whereYear('ganti_belt_atas_harian', $dateNow->format('Y'))
    ->count();
    $jumlahBeltBawah = \App\Models\Fuse::whereNotNull('ganti_belt_bawah_harian')
    ->whereMonth('ganti_belt_bawah_harian', $dateNow->format('m'))
    ->whereYear('ganti_belt_bawah_harian', $dateNow->format('Y'))
    ->count();
    $jumlahBearingAtas = \App\Models\Fuse::whereNotNull('ganti_bearing_tekanan_belt_atas_harian')
    ->whereMonth('ganti_bearing_tekanan_belt_atas_harian', $dateNow->format('m'))
    ->whereYear('ganti_bearing_tekanan_belt_atas_harian', $dateNow->format('Y'))
    ->count();
    $jumlahBearingBawah = \App\Models\Fuse::whereNotNull('ganti_bearing_tekanan_belt_bawah_harian')
    ->whereMonth('ganti_bearing_tekanan_belt_bawah_harian', $dateNow->format('m'))
    ->whereYear('ganti_bearing_tekanan_belt_bawah_harian', $dateNow->format('Y'))
    ->count();
    $jumlahRollpressAtas = \App\Models\Fuse::whereNotNull('ganti_rollpress_atas_harian')
    ->whereMonth('ganti_rollpress_atas_harian', $dateNow->format('m'))
    ->whereYear('ganti_rollpress_atas_harian', $dateNow->format('Y'))
    ->count();
    $jumlahRollpressBawah = \App\Models\Fuse::whereNotNull('ganti_rollpress_bawah_harian')
    ->whereMonth('ganti_rollpress_bawah_harian', $dateNow->format('m'))
    ->whereYear('ganti_rollpress_bawah_harian', $dateNow->format('Y'))
    ->count();
    $jumlahSwitchKontrol = \App\Models\Fuse::whereNotNull('ganti_switchkontrol_belt_harian')
    ->whereMonth('ganti_switchkontrol_belt_harian', $dateNow->format('m'))
    ->whereYear('ganti_switchkontrol_belt_harian', $dateNow->format('Y'))
    ->count();
    $jumlahKontrolSpeed = \App\Models\Fuse::whereNotNull('ganti_kontrol_speed_harian')
    ->whereMonth('ganti_kontrol_speed_harian', $dateNow->format('m'))
    ->whereYear('ganti_kontrol_speed_harian', $dateNow->format('Y'))
    ->count();
    $jumlahTemperatur = \App\Models\Fuse::whereNotNull('ganti_kontrol_temperatur_harian')
    ->whereMonth('ganti_kontrol_temperatur_harian', $dateNow->format('m'))
    ->whereYear('ganti_kontrol_temperatur_harian', $dateNow->format('Y'))
    ->count();
    $jumlahGearBox = \App\Models\Fabric::whereNotNull('perbaikan_gear_box_harian')
    ->whereMonth('perbaikan_gear_box_harian', $dateNow->format('m'))
    ->whereYear('perbaikan_gear_box_harian', $dateNow->format('Y'))
    ->count();
    $jumlahOliGear = \App\Models\Fabric::whereNotNull('ganti_oli_gear_box_harian')
    ->whereMonth('ganti_oli_gear_box_harian', $dateNow->format('m'))
    ->whereYear('ganti_oli_gear_box_harian', $dateNow->format('Y'))
    ->count();
    $jumlahRantai = \App\Models\Fabric::whereNotNull('perbaikan_tegangan_rantai_harian')
    ->whereMonth('perbaikan_tegangan_rantai_harian', $dateNow->format('m'))
    ->whereYear('perbaikan_tegangan_rantai_harian', $dateNow->format('Y'))
    ->count();
    $jumlahMotor = \App\Models\Fabric::whereNotNull('perbaikan_electrical_dan_motor_harian')
    ->whereMonth('perbaikan_electrical_dan_motor_harian', $dateNow->format('m'))
    ->whereYear('perbaikan_electrical_dan_motor_harian', $dateNow->format('Y'))
    ->count();
    $jumlahGrease = \App\Models\Fabric::whereNotNull('pemberian_grease_pada_roller_harian')
    ->whereMonth('pemberian_grease_pada_roller_harian', $dateNow->format('m'))
    ->whereYear('pemberian_grease_pada_roller_harian', $dateNow->format('Y'))
    ->count();
    $jumlahKaret = \App\Models\Fabric::whereNotNull('penggantian_karet_roller_harian')
    ->whereMonth('penggantian_karet_roller_harian', $dateNow->format('m'))
    ->whereYear('penggantian_karet_roller_harian', $dateNow->format('Y'))
    ->count();
    $jumlahInstalasiElectrical = \App\Models\MetalDetector::whereNotNull('perbaikan_instalasi_electrical_harian')
    ->whereMonth('perbaikan_instalasi_electrical_harian', $dateNow->format('m'))
    ->whereYear('perbaikan_instalasi_electrical_harian', $dateNow->format('Y'))
    ->count();
    $jumlahSwitchAutoStop = \App\Models\MetalDetector::whereNotNull('perbaikan_switch_auto_stop_harian')
    ->whereMonth('perbaikan_switch_auto_stop_harian', $dateNow->format('m'))
    ->whereYear('perbaikan_switch_auto_stop_harian', $dateNow->format('Y'))
    ->count();
    $jumlahBelts = \App\Models\MetalDetector::whereNotNull('perbaikan_belt_harian')
    ->whereMonth('perbaikan_belt_harian', $dateNow->format('m'))
    ->whereYear('perbaikan_belt_harian', $dateNow->format('Y'))
    ->count();
    $jumlahDinamoMotor = \App\Models\MetalDetector::whereNotNull('perbaikan_dinamo_motor_harian')
    ->whereMonth('perbaikan_dinamo_motor_harian', $dateNow->format('m'))
    ->whereYear('perbaikan_dinamo_motor_harian', $dateNow->format('Y'))
    ->count();
    $jumlahSensitifitas = \App\Models\MetalDetector::whereNotNull('perbaikan_sensitifitas_metal_harian')
    ->whereMonth('perbaikan_sensitifitas_metal_harian', $dateNow->format('m'))
    ->whereYear('perbaikan_sensitifitas_metal_harian', $dateNow->format('Y'))
    ->count();
    $jumlahSparepartLainnya = \App\Models\MetalDetector::whereNotNull('check_spareparts_lainnya_harian')
    ->whereMonth('check_spareparts_lainnya_harian', $dateNow->format('m'))
    ->whereYear('check_spareparts_lainnya_harian', $dateNow->format('Y'))
    ->count();
    $jumlahPlotterHead = \App\Models\Plotter::whereNotNull('perbaikan_plotter_head_harian')
    ->whereMonth('perbaikan_plotter_head_harian', $dateNow->format('m'))
    ->whereYear('perbaikan_plotter_head_harian', $dateNow->format('Y'))
    ->count();
    $jumlahStandPole = \App\Models\Plotter::whereNotNull('perbaikan_stand_pole_harian')
    ->whereMonth('perbaikan_stand_pole_harian', $dateNow->format('m'))
    ->whereYear('perbaikan_stand_pole_harian', $dateNow->format('Y'))
    ->count();
    $jumlahFootBar = \App\Models\Plotter::whereNotNull('perbaikan_foot_bar_harian')
    ->whereMonth('perbaikan_foot_bar_harian', $dateNow->format('m'))
    ->whereYear('perbaikan_foot_bar_harian', $dateNow->format('Y'))
    ->count();
    $jumlahRollingPaper = \App\Models\Plotter::whereNotNull('perbaikan_rolling_paper_role_harian')
    ->whereMonth('perbaikan_rolling_paper_role_harian', $dateNow->format('m'))
    ->whereYear('perbaikan_rolling_paper_role_harian', $dateNow->format('Y'))
    ->count();
    $jumlahSendingPaper = \App\Models\Plotter::whereNotNull('perbaikan_sending_paper_role_harian')
    ->whereMonth('perbaikan_sending_paper_role_harian', $dateNow->format('m'))
    ->whereYear('perbaikan_sending_paper_role_harian', $dateNow->format('Y'))
    ->count();
    $jumlahBalancing = \App\Models\Plotter::whereNotNull('perbaikan_balancing_pole_harian')
    ->whereMonth('perbaikan_balancing_pole_harian', $dateNow->format('m'))
    ->whereYear('perbaikan_balancing_pole_harian', $dateNow->format('Y'))
    ->count();
    $jumlahPuiling = \App\Models\Plotter::whereNotNull('perbaikan_puiling_pole_harian')
    ->whereMonth('perbaikan_puiling_pole_harian', $dateNow->format('m'))
    ->whereYear('perbaikan_puiling_pole_harian', $dateNow->format('Y'))
    ->count();
    $jumlahRollerHoop = \App\Models\Plotter::whereNotNull('perbaikan_paper_roller_hoop_harian')
    ->whereMonth('perbaikan_paper_roller_hoop_harian', $dateNow->format('m'))
    ->whereYear('perbaikan_paper_roller_hoop_harian', $dateNow->format('Y'))
    ->count();
    $jumlahConnection = \App\Models\Plotter::whereNotNull('perbaikan_connection_cable_harian')
    ->whereMonth('perbaikan_connection_cable_harian', $dateNow->format('m'))
    ->whereYear('perbaikan_connection_cable_harian', $dateNow->format('Y'))
    ->count();
    $jumlahPrintHead = \App\Models\Plotter::whereNotNull('perbaikan_ganti_print_head_harian')
    ->whereMonth('perbaikan_ganti_print_head_harian', $dateNow->format('m'))
    ->whereYear('perbaikan_ganti_print_head_harian', $dateNow->format('Y'))
    ->count();
    $jumlahRollpress = \App\Models\Pipping::whereNotNull('perbaikan_rollpress_harian')
    ->whereMonth('perbaikan_rollpress_harian', $dateNow->format('m'))
    ->whereYear('perbaikan_rollpress_harian', $dateNow->format('Y'))
    ->count();
    $jumlahCounter = \App\Models\Pipping::whereNotNull('ganti_counter_harian')
    ->whereMonth('ganti_counter_harian', $dateNow->format('m'))
    ->whereYear('ganti_counter_harian', $dateNow->format('Y'))
    ->count();
    $jumlahPisauPotong = \App\Models\Pipping::whereNotNull('ganti_pisau_potong_harian')
    ->whereMonth('ganti_pisau_potong_harian', $dateNow->format('m'))
    ->whereYear('ganti_pisau_potong_harian', $dateNow->format('Y'))
    ->count();
    $jumlahMotorPenggerak = \App\Models\Pipping::whereNotNull('ganti_motor_penggerak_harian')
    ->whereMonth('ganti_motor_penggerak_harian', $dateNow->format('m'))
    ->whereYear('ganti_motor_penggerak_harian', $dateNow->format('Y'))
    ->count();
    $jumlahKompresor = \App\Models\Pipping::whereNotNull('perbaikan_motor_kompresor_harian')
    ->whereMonth('perbaikan_motor_kompresor_harian', $dateNow->format('m'))
    ->whereYear('perbaikan_motor_kompresor_harian', $dateNow->format('Y'))
    ->count();
    $jumlahGreaseRoller = \App\Models\Pipping::whereNotNull('perbaikan_grease_pada_roller_harian')
    ->whereMonth('perbaikan_grease_pada_roller_harian', $dateNow->format('m'))
    ->whereYear('perbaikan_grease_pada_roller_harian', $dateNow->format('Y'))
    ->count();
    $jumlahEmergency = \App\Models\Pipping::whereNotNull('perbaikan_emergency_autostop_harian')
    ->whereMonth('perbaikan_emergency_autostop_harian', $dateNow->format('m'))
    ->whereYear('perbaikan_emergency_autostop_harian', $dateNow->format('Y'))
    ->count();
    $jumlahRollpresss = \App\Models\Strip::whereNotNull('perbaikan_rollpress_harian')
    ->whereMonth('perbaikan_rollpress_harian', $dateNow->format('m'))
    ->whereYear('perbaikan_rollpress_harian', $dateNow->format('Y'))
    ->count();
    $jumlahAsahan = \App\Models\Strip::whereNotNull('ganti_asahan_harian')
    ->whereMonth('ganti_asahan_harian', $dateNow->format('m'))
    ->whereYear('ganti_asahan_harian', $dateNow->format('Y'))
    ->count();
    $jumlahPotong = \App\Models\Strip::whereNotNull('ganti_pisau_potong_harian')
    ->whereMonth('ganti_pisau_potong_harian', $dateNow->format('m'))
    ->whereYear('ganti_pisau_potong_harian', $dateNow->format('Y'))
    ->count();
    $jumlahPenggerak = \App\Models\Strip::whereNotNull('ganti_motor_penggerak_harian')
    ->whereMonth('ganti_motor_penggerak_harian', $dateNow->format('m'))
    ->whereYear('ganti_motor_penggerak_harian', $dateNow->format('Y'))
    ->count();
    $jumlahVakum = \App\Models\Strip::whereNotNull('perbaikan_motor_vakum_harian')
    ->whereMonth('perbaikan_motor_vakum_harian', $dateNow->format('m'))
    ->whereYear('perbaikan_motor_vakum_harian', $dateNow->format('Y'))
    ->count();
    $jumlahRoller = \App\Models\Strip::whereNotNull('pemberian_grease_pada_roller_harian')
    ->whereMonth('pemberian_grease_pada_roller_harian', $dateNow->format('m'))
    ->whereYear('pemberian_grease_pada_roller_harian', $dateNow->format('Y'))
    ->count();
    $jumlahAutostop = \App\Models\Strip::whereNotNull('perbaikan_emergency_autostop_harian')
    ->whereMonth('perbaikan_emergency_autostop_harian', $dateNow->format('m'))
    ->whereYear('perbaikan_emergency_autostop_harian', $dateNow->format('Y'))
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
      $jumlahElectricalInstalasi = 0;
      $jumlahMotorBearingPully = 0;
      $jumlahPullyAtasBearing = 0;
      $jumlahGantiGerindaAsahanPisau = 0;
      $jumlahDinamoKompresor = 0;
      $jumlahBersihkanMesin = 0;
      $jumlahGantiSparepartKnife = 0;
      $jumlahMinyakRil = 0;
      $jumlahPulpen = 0;
      $jumlahPisau = 0;
      $jumlahKomponenElektro = 0;
      $jumlahInstalasiKelistrikan = 0;
      $jumlahVacum = 0;
      $jumlahBelt = 0;
      $jumlahPisauTumpul = 0;
      $jumlahMinyakHabis = 0;
      $jumlahAbrasif = 0;
      $jumlahInstalasiKabel = 0;
      $jumlahKondisiMesin = 0;
      $jumlahBeltAtas = 0;
      $jumlahBeltBawah = 0;
      $jumlahBearingAtas = 0;
      $jumlahBearingBawah = 0;
      $jumlahRollpressAtas = 0;
      $jumlahRollpressBawah = 0;
      $jumlahSwitchKontrol = 0;
      $jumlahKontrolSpeed = 0;
      $jumlahTemperatur = 0;
      $jumlahGearBox = 0;
      $jumlahOliGear = 0;
      $jumlahRantai = 0;
      $jumlahMotor = 0;
      $jumlahGrease = 0;
      $jumlahKaret = 0;
      $jumlahInstalasiElectrical = 0;
      $jumlahSwitchAutoStop = 0;
      $jumlahBelts = 0;
      $jumlahDinamoMotor = 0;
      $jumlahSensitifitas = 0;
      $jumlahSparepartLainnya = 0;
      $jumlahPlotterHead = 0;
      $jumlahStandPole = 0;
      $jumlahFootBar = 0;
      $jumlahRollingPaper = 0;
      $jumlahSendingPaper = 0;
      $jumlahBalancing = 0;
      $jumlahPuiling = 0;
      $jumlahRollerHoop = 0;
      $jumlahConnection = 0;
      $jumlahPrintHead = 0;
      $jumlahRollpress = 0;
      $jumlahCounter = 0;
      $jumlahPisauPotong = 0;
      $jumlahMotorPenggerak = 0;
      $jumlahKompresor = 0;
      $jumlahGreaseRoller = 0;
      $jumlahEmergency = 0;
      $jumlahRollpresss = 0;
      $jumlahAsahan = 0;
      $jumlahPotong = 0;
      $jumlahPenggerak = 0;
      $jumlahVakum = 0;
      $jumlahRoller = 0;
      $jumlahAutostop = 0;
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
              <a href="/sewing-sample?jenis=jahitan_loncat_harian" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
      </div>
      <!-- ./col -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $jumlahBenangPutusan }}</h3>
                  <p>Benang Putusan (Sewing)</p>
            </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $jumlahGantiGuntingPisau }}</h3>
                  <p>Ganti Gunting/Pisau (Sewing)</p>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
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
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $jumlahPisauTidakMotong }}</h3>
                  <p>Pisau Tidak Motong (Sewing)</p>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{ $jumlahKebersihanMesin }}</h3>
                  <p>Kebersihan Mesin (Sewing)</p>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
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
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $jumlahGantiSparepartLainnya }}</h3>
                  <p>Ganti Sparepart Lainnya (Sewing)</p>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      </div> 
        <!-- /.row -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $jumlahElectricalInstalasi }}</h3>
                  <p>Perbaikan Electrical Instalasi (Band Knife)</p>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
      </div>
      <!-- ./col -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $jumlahMotorBearingPully }}</h3>
                  <p>Ganti/Perbaikan Motor Bearing Pully (Band Knife)</p>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $jumlahPullyAtasBearing }}</h3>
                  <p>Ganti/Perbaikan Pully Atas Bearing (Band Knife)</p>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{ $jumlahGantiGerindaAsahanPisau }}</h3>
                  <p>Ganti Gerinda Asahan Pisau (Band Knife)</p>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      </div>
      <div class="row">
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $jumlahDinamoKompresor }}</h3>
                  <p>Ganti/Perbaikan Dinamo Kompresor (Band Knife)</p>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $jumlahBersihkanMesin }}</h3>
                  <p>Servis/Bersihkan Mesin (Band Knife)</p>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $jumlahGantiSparepartKnife }}</h3>
                  <p>Ganti Sparepart Lainnya (Band Knife)</p>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $jumlahMinyakRil }}</h3>
                  <p>Pemberian Minyak pada Ril (Pattern)</p>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
      </div>
      <!-- ./col -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $jumlahPulpen }}</h3>
                  <p>Ganti Pulpen (Pattern)</p>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $jumlahPisau }}</h3>
                  <p>Ganti Pisau (Pattern)</p>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{ $jumlahKomponenElektro }}</h3>
                  <p>Ganti Komponen Elektro (Pattern)</p>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      </div>
      <div class="row">
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $jumlahInstalasiKelistrikan }}</h3>
                  <p>Ganti Instalasi Kelistrikan (Pattern)</p>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $jumlahVacum }}</h3>
                  <p>Ganti Vacum (Pattern)</p>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $jumlahBelt }}</h3>
                  <p>Ganti Belt (Pattern)</p>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $jumlahPisauTumpul }}</h3>
                  <p>Pisau Tumpul (KM Cutting)</p>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
      </div>
      <!-- ./col -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $jumlahMinyakHabis }}</h3>
                  <p>Minyak Habis (KM Cutting)</p>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $jumlahAbrasif }}</h3>
                  <p>Ganti Abrasif (KM Cutting)</p>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{ $jumlahInstalasiKabel }}</h3>
                  <p>Check Instalasi Kabel (KM Cutting)</p>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      </div>
      <div class="row">
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $jumlahKondisiMesin }}</h3>
                  <p>Check Kondisi Mesin (KM Cutting)</p>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $jumlahBeltAtas }}</h3>
                  <p>Ganti Belt Atas (Fuse)</p>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
      </div>
      <!-- ./col -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $jumlahBeltBawah }}</h3>
                  <p>Ganti Belt Bawah (Fuse)</p>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $jumlahBearingAtas }}</h3>
                  <p>Ganti Bearing Atas (Fuse)</p>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{ $jumlahBearingBawah }}</h3>
                  <p>Ganti Bearing Bawah (Fuse)</p>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      </div>
      <div class="row">
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $jumlahRollpressAtas }}</h3>
                  <p>Ganti Rollpress Atas (Fuse)</p>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $jumlahRollpressBawah }}</h3>
                  <p>Ganti Rollpress Bawah (Fuse)</p>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $jumlahSwitchKontrol }}</h3>
                  <p>Ganti Switch Kontrol Belt (Fuse)</p>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{ $jumlahKontrolSpeed }}</h3>
                  <p>Ganti Kontrol Speed (Fuse)</p>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      </div>
      <div class="row">
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
              <h3>{{ $jumlahTemperatur }}</h3>
                  <p>Ganti Kontrol Temperatur (Fuse)</p>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $jumlahGearBox }}</h3>
                  <p>Perbaikan Gear Box (Fabric)</p>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
      </div>
      <!-- ./col -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $jumlahOliGear }}</h3>
                  <p>Ganti Oli Gear Box (Fabric)</p>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $jumlahRantai }}</h3>
                  <p>Perbaikan Tegangan Rantai (Fabric)</p>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{ $jumlahMotor }}</h3>
                  <p>Perbaikan Elektrikal dan Motor (Fabric)</p>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      </div>
      <div class="row">
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $jumlahGrease }}</h3>
                  <p>Pemberian Grease pada Roller (Fabric)</p>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $jumlahKaret }}</h3>
                  <p>Ganti Karet Roller (Fabric)</p>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $jumlahInstalasiElectrical }}</h3>
                  <p>Perbaikan Instalasi Electrical (Metal Detector)</p>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
      </div>
      <!-- ./col -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $jumlahSwitchAutoStop }}</h3>
                  <p>Perbaikan Switch Auto Stop (Metal Detector)</p>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $jumlahBelts }}</h3>
                  <p>Perbaikan Belt (Metal Detector)</p>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{ $jumlahDinamoMotor }}</h3>
                  <p>Perbaikan Dinamo Motor (Metal Detector)</p>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      </div>
      <div class="row">
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $jumlahSensitifitas }}</h3>
                  <p>Perbaikan Sensitifitas Metal (Metal Detector)</p>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $jumlahSparepartLainnya }}</h3>
                  <p>Check Sparepart Lainnya (Metal Detector)</p>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $jumlahPlotterHead }}</h3>
                  <p>Perbaikan Plotter Head (Plotter)</p>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
      </div>
      <!-- ./col -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $jumlahStandPole }}</h3>
                  <p>Perbaikan Stand Pole (Plotter)</p>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $jumlahFootBar }}</h3>
                  <p>Perbaikan Foot Bar (Plotter)</p>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{ $jumlahRollingPaper }}</h3>
                  <p>Perbaikan Rolling Paper Role (Plotter)</p>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      </div>
      <div class="row">
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $jumlahSendingPaper }}</h3>
                  <p>Perbaikan Sending Paper Role (Plotter)</p>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $jumlahBalancing }}</h3>
                  <p>Perbaikan Balancing Pole (Plotter)</p>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $jumlahPuiling }}</h3>
                  <p>Perbaikan Puiling Pole (Plotter)</p>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{ $jumlahRollerHoop }}</h3>
                  <p>Perbaikan Paper Roller Hoop (Plotter)</p>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      </div>
      <div class="row">
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
              <h3>{{ $jumlahConnection }}</h3>
                  <p>Perbaikan Connection Cable (Plotter)</p>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $jumlahPrintHead }}</h3>
                  <p>Perbaikan/Ganti Print Head (Plotter)</p>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      </div>
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $jumlahRollpress }}</h3>
                  <p>Perbaikan Rollpress (Rewinding Pipping)</p>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
      </div>
      <!-- ./col -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $jumlahCounter }}</h3>
                  <p>Ganti Counter (Rewinding Pipping)</p>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $jumlahPisauPotong }}</h3>
                  <p>Ganti Pisau Potong (Rewinding Pipping)</p>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{ $jumlahMotorPenggerak }}</h3>
                  <p>Ganti Motor Penggerak (Rewinding Pipping)</p>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      </div>
      <div class="row">
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $jumlahKompresor }}</h3>
                  <p>Perbaikan Motor Kompresor (Rewinding Pipping)</p>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $jumlahGreaseRoller }}</h3>
                  <p>Perbaikan Grease pada Roller (Rewinding Pipping)</p>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $jumlahEmergency }}</h3>
                  <p>Perbaikan Emergency Auto Stop (Rewinding Pipping)</p>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $jumlahRollpresss }}</h3>
                  <p>Perbaikan Rollpress (Strip Cutter)</p>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
      </div>
      <!-- ./col -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $jumlahAsahan }}</h3>
                  <p>Ganti Asahan (Strip Cutter)</p>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $jumlahPotong }}</h3>
                  <p>Ganti Pisau Potong (Strip Cutter)</p>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{ $jumlahPenggerak }}</h3>
                  <p>Ganti Motor Penggerak (Strip Cutter)</p>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      </div>
      <div class="row">
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $jumlahVakum }}</h3>
                  <p>Perbaikan Motor Vakum (Strip Cutter)</p>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $jumlahRoller }}</h3>
                  <p>Pemberian Grease pada Roller (Strip Cutter)</p>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $jumlahAutostop }}</h3>
                  <p>Perbaikan Emergency Auto Stop (Strip Cutter)</p>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div> 
@endsection