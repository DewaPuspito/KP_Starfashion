<?php

namespace App\Exports;

use App\Models\KM;
use App\Models\Fuse;
use App\Models\Strip;
use App\Models\Fabric;
use App\Models\Pattern;
use App\Models\Pipping;
use App\Models\Plotter;
use App\Models\BandKnife;
use App\Models\SewingSample;
use App\Models\MetalDetector;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class DashboardExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        $dateNow = now();

        $jumlahJahitanLoncat = SewingSample::whereNotNull('jahitan_loncat_harian')
            ->whereMonth('jahitan_loncat_harian', $dateNow->format('m'))
            ->whereYear('jahitan_loncat_harian', $dateNow->format('Y'))
            ->count();

        $jumlahBenangPutusan = SewingSample::whereNotNull('benang_putusan_harian')
            ->whereMonth('benang_putusan_harian', $dateNow->format('m'))
            ->whereYear('benang_putusan_harian', $dateNow->format('Y'))
            ->count();

        $jumlahGantiGuntingPisau = SewingSample::whereNotNull('ganti_gunting_pisau_harian')
            ->whereMonth('ganti_gunting_pisau_harian', $dateNow->format('m'))
            ->whereYear('ganti_gunting_pisau_harian', $dateNow->format('Y'))
            ->count();

        $jumlahGantiRotary= SewingSample::whereNotNull('ganti_rotary_harian')
            ->whereMonth('ganti_rotary_harian', $dateNow->format('m'))
            ->whereYear('ganti_rotary_harian', $dateNow->format('Y'))
            ->count();

        $jumlahGantiSuttelHook = SewingSample::whereNotNull('ganti_suttel_hook_harian')
            ->whereMonth('ganti_suttel_hook_harian', $dateNow->format('m'))
            ->whereYear('ganti_suttel_hook_harian', $dateNow->format('Y'))
            ->count();
            
        $jumlahBakMesin= SewingSample::whereNotNull('bersihkan_bak_mesin_harian')
            ->whereMonth('bersihkan_bak_mesin_harian', $dateNow->format('m'))
            ->whereYear('bersihkan_bak_mesin_harian', $dateNow->format('Y'))
            ->count();

        $jumlahPisauTidakMotong = SewingSample::whereNotNull('pisau_tidak_motong_harian')
            ->whereMonth('pisau_tidak_motong_harian', $dateNow->format('m'))
            ->whereYear('pisau_tidak_motong_harian', $dateNow->format('Y'))
            ->count();
            
        $jumlahKebersihanMesin= SewingSample::whereNotNull('kebersihan_mesin_harian')
            ->whereMonth('kebersihan_mesin_harian', $dateNow->format('m'))
            ->whereYear('kebersihan_mesin_harian', $dateNow->format('Y'))
            ->count();
            
        $jumlahGantiSparepartLainnya= SewingSample::whereNotNull('ganti_sparepart_lainnya_harian')
            ->whereMonth('ganti_sparepart_lainnya_harian', $dateNow->format('m'))
            ->whereYear('ganti_sparepart_lainnya_harian', $dateNow->format('Y'))
            ->count();
            
        $jumlahKondisiMinyakMesin= SewingSample::whereNotNull('cek_kondisi_minyak_mesin_harian')
            ->whereMonth('cek_kondisi_minyak_mesin_harian', $dateNow->format('m'))
            ->whereYear('cek_kondisi_minyak_mesin_harian', $dateNow->format('Y'))
            ->count();
        
        $jumlahElectricalInstalasi = BandKnife::whereNotNull('perbaikan_electrical_instalasi_harian')
            ->whereMonth('perbaikan_electrical_instalasi_harian', $dateNow->format('m'))
            ->whereYear('perbaikan_electrical_instalasi_harian', $dateNow->format('Y'))
            ->count();
            
        $jumlahMotorBearingPully = BandKnife::whereNotNull('ganti_perbaikan_motor_bearing_pully_harian')
            ->whereMonth('ganti_perbaikan_motor_bearing_pully_harian', $dateNow->format('m'))
            ->whereYear('ganti_perbaikan_motor_bearing_pully_harian', $dateNow->format('Y'))
            ->count();
        
        $jumlahPullyAtasBearing = BandKnife::whereNotNull('ganti_perbaikan_pullyatas_bearing_harian')
            ->whereMonth('ganti_perbaikan_pullyatas_bearing_harian', $dateNow->format('m'))
            ->whereYear('ganti_perbaikan_pullyatas_bearing_harian', $dateNow->format('Y'))
            ->count();
            
        $jumlahGantiGerindaAsahanPisau = BandKnife::whereNotNull('ganti_gerinda_asahan_pisau_harian')
            ->whereMonth('ganti_gerinda_asahan_pisau_harian', $dateNow->format('m'))
            ->whereYear('ganti_gerinda_asahan_pisau_harian', $dateNow->format('Y'))
            ->count();
            
        $jumlahDinamoKompresor = BandKnife::whereNotNull('ganti_perbaikan_dinamo_kompresor_harian')
            ->whereMonth('ganti_perbaikan_dinamo_kompresor_harian', $dateNow->format('m'))
            ->whereYear('ganti_perbaikan_dinamo_kompresor_harian', $dateNow->format('Y'))
            ->count();
        
        $jumlahBersihkanMesin = BandKnife::whereNotNull('servis_bersihkan_mesin_harian')
            ->whereMonth('servis_bersihkan_mesin_harian', $dateNow->format('m'))
            ->whereYear('servis_bersihkan_mesin_harian', $dateNow->format('Y'))
            ->count();
            
        $jumlahGantiSparepartKnife = BandKnife::whereNotNull('ganti_sparepart_lainnya_harian')
            ->whereMonth('ganti_sparepart_lainnya_harian', $dateNow->format('m'))
            ->whereYear('ganti_sparepart_lainnya_harian', $dateNow->format('Y'))
            ->count();
            
        $jumlahMinyakRil = Pattern::whereNotNull('pemberian_minyak_pada_ril_harian')
            ->whereMonth('pemberian_minyak_pada_ril_harian', $dateNow->format('m'))
            ->whereYear('pemberian_minyak_pada_ril_harian', $dateNow->format('Y'))
            ->count();
            
        $jumlahPulpen = Pattern::whereNotNull('ganti_pulpen_harian')
            ->whereMonth('ganti_pulpen_harian', $dateNow->format('m'))
            ->whereYear('ganti_pulpen_harian', $dateNow->format('Y'))
            ->count();
            
        $jumlahPisau = Pattern::whereNotNull('ganti_pisau_harian')
            ->whereMonth('ganti_pisau_harian', $dateNow->format('m'))
            ->whereYear('ganti_pisau_harian', $dateNow->format('Y'))
            ->count();
            
        $jumlahKomponenElektro = Pattern::whereNotNull('ganti_komponen_elektro_harian')
            ->whereMonth('ganti_komponen_elektro_harian', $dateNow->format('m'))
            ->whereYear('ganti_komponen_elektro_harian', $dateNow->format('Y'))
            ->count();
            
        $jumlahInstalasiKelistrikan = Pattern::whereNotNull('ganti_instalasi_kelistrikan_harian')
            ->whereMonth('ganti_instalasi_kelistrikan_harian', $dateNow->format('m'))
            ->whereYear('ganti_instalasi_kelistrikan_harian', $dateNow->format('Y'))
            ->count();
            
        $jumlahVacum = Pattern::whereNotNull('ganti_vacum_harian')
            ->whereMonth('ganti_vacum_harian', $dateNow->format('m'))
            ->whereYear('ganti_vacum_harian', $dateNow->format('Y'))
            ->count();
            
        $jumlahBelt = Pattern::whereNotNull('ganti_belt_harian')
            ->whereMonth('ganti_belt_harian', $dateNow->format('m'))
            ->whereYear('ganti_belt_harian', $dateNow->format('Y'))
            ->count();
            
        $jumlahPisauTumpul = KM::whereNotNull('pisau_tumpul_harian')
            ->whereMonth('pisau_tumpul_harian', $dateNow->format('m'))
            ->whereYear('pisau_tumpul_harian', $dateNow->format('Y'))
            ->count();
            
        $jumlahMinyakHabis = KM::whereNotNull('minyak_habis_harian')
            ->whereMonth('minyak_habis_harian', $dateNow->format('m'))
            ->whereYear('minyak_habis_harian', $dateNow->format('Y'))
            ->count();
            
        $jumlahAbrasif= KM::whereNotNull('ganti_abrasif_harian')
            ->whereMonth('ganti_abrasif_harian', $dateNow->format('m'))
            ->whereYear('ganti_abrasif_harian', $dateNow->format('Y'))
            ->count();
            
        $jumlahInstalasiKabel = KM::whereNotNull('check_instalasi_kabel_harian')
            ->whereMonth('check_instalasi_kabel_harian', $dateNow->format('m'))
            ->whereYear('check_instalasi_kabel_harian', $dateNow->format('Y'))
            ->count();

        $jumlahKondisiMesin = KM::whereNotNull('check_kondisi_mesin_harian')
            ->whereMonth('check_kondisi_mesin_harian', $dateNow->format('m'))
            ->whereYear('check_kondisi_mesin_harian', $dateNow->format('Y'))
            ->count();

        $jumlahBeltAtas = Fuse::whereNotNull('ganti_belt_atas_harian')
            ->whereMonth('ganti_belt_atas_harian', $dateNow->format('m'))
            ->whereYear('ganti_belt_atas_harian', $dateNow->format('Y'))
            ->count();

        $jumlahBeltBawah = Fuse::whereNotNull('ganti_belt_bawah_harian')
            ->whereMonth('ganti_belt_bawah_harian', $dateNow->format('m'))
            ->whereYear('ganti_belt_bawah_harian', $dateNow->format('Y'))
            ->count();

        $jumlahBearingAtas = Fuse::whereNotNull('ganti_bearing_tekanan_belt_atas_harian')
            ->whereMonth('ganti_bearing_tekanan_belt_atas_harian', $dateNow->format('m'))
            ->whereYear('ganti_bearing_tekanan_belt_atas_harian', $dateNow->format('Y'))
            ->count();

        $jumlahBearingBawah = Fuse::whereNotNull('ganti_bearing_tekanan_belt_bawah_harian')
            ->whereMonth('ganti_bearing_tekanan_belt_bawah_harian', $dateNow->format('m'))
            ->whereYear('ganti_bearing_tekanan_belt_bawah_harian', $dateNow->format('Y'))
            ->count();

        $jumlahRollpressAtas = Fuse::whereNotNull('ganti_rollpress_atas_harian')
            ->whereMonth('ganti_rollpress_atas_harian', $dateNow->format('m'))
            ->whereYear('ganti_rollpress_atas_harian', $dateNow->format('Y'))
            ->count();

        $jumlahRollpressBawah = Fuse::whereNotNull('ganti_rollpress_bawah_harian')
            ->whereMonth('ganti_rollpress_bawah_harian', $dateNow->format('m'))
            ->whereYear('ganti_rollpress_bawah_harian', $dateNow->format('Y'))
            ->count();

        $jumlahSwitchKontrol = Fuse::whereNotNull('ganti_switchkontrol_belt_harian')
            ->whereMonth('ganti_switchkontrol_belt_harian', $dateNow->format('m'))
            ->whereYear('ganti_switchkontrol_belt_harian', $dateNow->format('Y'))
            ->count();

        $jumlahKontrolSpeed = Fuse::whereNotNull('ganti_kontrol_speed_harian')
            ->whereMonth('ganti_kontrol_speed_harian', $dateNow->format('m'))
            ->whereYear('ganti_kontrol_speed_harian', $dateNow->format('Y'))
            ->count();

        $jumlahTemperatur = Fuse::whereNotNull('ganti_kontrol_temperatur_harian')
            ->whereMonth('ganti_kontrol_temperatur_harian', $dateNow->format('m'))
            ->whereYear('ganti_kontrol_temperatur_harian', $dateNow->format('Y'))
            ->count();

        $jumlahGearBox = Fabric::whereNotNull('perbaikan_gear_box_harian')
            ->whereMonth('perbaikan_gear_box_harian', $dateNow->format('m'))
            ->whereYear('perbaikan_gear_box_harian', $dateNow->format('Y'))
            ->count();

        $jumlahOliGear = Fabric::whereNotNull('ganti_oli_gear_box_harian')
            ->whereMonth('ganti_oli_gear_box_harian', $dateNow->format('m'))
            ->whereYear('ganti_oli_gear_box_harian', $dateNow->format('Y'))
            ->count();

        $jumlahRantai = Fabric::whereNotNull('perbaikan_tegangan_rantai_harian')
            ->whereMonth('perbaikan_tegangan_rantai_harian', $dateNow->format('m'))
            ->whereYear('perbaikan_tegangan_rantai_harian', $dateNow->format('Y'))
            ->count();

        $jumlahMotor = Fabric::whereNotNull('perbaikan_electrical_dan_motor_harian')
            ->whereMonth('perbaikan_electrical_dan_motor_harian', $dateNow->format('m'))
            ->whereYear('perbaikan_electrical_dan_motor_harian', $dateNow->format('Y'))
            ->count();

        $jumlahGrease = Fabric::whereNotNull('pemberian_grease_pada_roller_harian')
            ->whereMonth('pemberian_grease_pada_roller_harian', $dateNow->format('m'))
            ->whereYear('pemberian_grease_pada_roller_harian', $dateNow->format('Y'))
            ->count();

        $jumlahKaret = Fabric::whereNotNull('penggantian_karet_roller_harian')
            ->whereMonth('penggantian_karet_roller_harian', $dateNow->format('m'))
            ->whereYear('penggantian_karet_roller_harian', $dateNow->format('Y'))
            ->count();

        $jumlahInstalasiElectrical = MetalDetector::whereNotNull('perbaikan_instalasi_electrical_harian')
            ->whereMonth('perbaikan_instalasi_electrical_harian', $dateNow->format('m'))
            ->whereYear('perbaikan_instalasi_electrical_harian', $dateNow->format('Y'))
            ->count();

        $jumlahSwitchAutoStop = MetalDetector::whereNotNull('perbaikan_switch_auto_stop_harian')
            ->whereMonth('perbaikan_switch_auto_stop_harian', $dateNow->format('m'))
            ->whereYear('perbaikan_switch_auto_stop_harian', $dateNow->format('Y'))
            ->count();

        $jumlahBelts = MetalDetector::whereNotNull('perbaikan_belt_harian')
            ->whereMonth('perbaikan_belt_harian', $dateNow->format('m'))
            ->whereYear('perbaikan_belt_harian', $dateNow->format('Y'))
            ->count();

        $jumlahDinamoMotor = MetalDetector::whereNotNull('perbaikan_dinamo_motor_harian')
            ->whereMonth('perbaikan_dinamo_motor_harian', $dateNow->format('m'))
            ->whereYear('perbaikan_dinamo_motor_harian', $dateNow->format('Y'))
            ->count();

        $jumlahSensitifitas = MetalDetector::whereNotNull('perbaikan_sensitifitas_metal_harian')
            ->whereMonth('perbaikan_sensitifitas_metal_harian', $dateNow->format('m'))
            ->whereYear('perbaikan_sensitifitas_metal_harian', $dateNow->format('Y'))
            ->count();

        $jumlahSparepartLainnya = MetalDetector::whereNotNull('check_spareparts_lainnya_harian')
            ->whereMonth('check_spareparts_lainnya_harian', $dateNow->format('m'))
            ->whereYear('check_spareparts_lainnya_harian', $dateNow->format('Y'))
            ->count();

        $jumlahPlotterHead = Plotter::whereNotNull('perbaikan_plotter_head_harian')
            ->whereMonth('perbaikan_plotter_head_harian', $dateNow->format('m'))
            ->whereYear('perbaikan_plotter_head_harian', $dateNow->format('Y'))
            ->count();

        $jumlahStandPole = Plotter::whereNotNull('perbaikan_stand_pole_harian')
            ->whereMonth('perbaikan_stand_pole_harian', $dateNow->format('m'))
            ->whereYear('perbaikan_stand_pole_harian', $dateNow->format('Y'))
            ->count();

        $jumlahFootBar = Plotter::whereNotNull('perbaikan_foot_bar_harian')
            ->whereMonth('perbaikan_foot_bar_harian', $dateNow->format('m'))
            ->whereYear('perbaikan_foot_bar_harian', $dateNow->format('Y'))
            ->count();

        $jumlahRollingPaper = Plotter::whereNotNull('perbaikan_rolling_paper_role_harian')
            ->whereMonth('perbaikan_rolling_paper_role_harian', $dateNow->format('m'))
            ->whereYear('perbaikan_rolling_paper_role_harian', $dateNow->format('Y'))
            ->count();

        $jumlahSendingPaper = Plotter::whereNotNull('perbaikan_sending_paper_role_harian')
            ->whereMonth('perbaikan_sending_paper_role_harian', $dateNow->format('m'))
            ->whereYear('perbaikan_sending_paper_role_harian', $dateNow->format('Y'))
            ->count();

        $jumlahBalancing = Plotter::whereNotNull('perbaikan_balancing_pole_harian')
            ->whereMonth('perbaikan_balancing_pole_harian', $dateNow->format('m'))
            ->whereYear('perbaikan_balancing_pole_harian', $dateNow->format('Y'))
            ->count();

        $jumlahPuiling = Plotter::whereNotNull('perbaikan_puiling_pole_harian')
            ->whereMonth('perbaikan_puiling_pole_harian', $dateNow->format('m'))
            ->whereYear('perbaikan_puiling_pole_harian', $dateNow->format('Y'))
            ->count();

        $jumlahRollerHoop = Plotter::whereNotNull('perbaikan_paper_roller_hoop_harian')
            ->whereMonth('perbaikan_paper_roller_hoop_harian', $dateNow->format('m'))
            ->whereYear('perbaikan_paper_roller_hoop_harian', $dateNow->format('Y'))
            ->count();

        $jumlahConnection = Plotter::whereNotNull('perbaikan_connection_cable_harian')
            ->whereMonth('perbaikan_connection_cable_harian', $dateNow->format('m'))
            ->whereYear('perbaikan_connection_cable_harian', $dateNow->format('Y'))
            ->count();

        $jumlahPrintHead = Plotter::whereNotNull('perbaikan_ganti_print_head_harian')
            ->whereMonth('perbaikan_ganti_print_head_harian', $dateNow->format('m'))
            ->whereYear('perbaikan_ganti_print_head_harian', $dateNow->format('Y'))
            ->count();

        $jumlahRollpress = Pipping::whereNotNull('perbaikan_rollpress_harian')
            ->whereMonth('perbaikan_rollpress_harian', $dateNow->format('m'))
            ->whereYear('perbaikan_rollpress_harian', $dateNow->format('Y'))
            ->count();

        $jumlahCounter = Pipping::whereNotNull('ganti_counter_harian')
            ->whereMonth('ganti_counter_harian', $dateNow->format('m'))
            ->whereYear('ganti_counter_harian', $dateNow->format('Y'))
            ->count();

        $jumlahPisauPotong = Pipping::whereNotNull('ganti_pisau_potong_harian')
            ->whereMonth('ganti_pisau_potong_harian', $dateNow->format('m'))
            ->whereYear('ganti_pisau_potong_harian', $dateNow->format('Y'))
            ->count();

        $jumlahMotorPenggerak = Pipping::whereNotNull('ganti_motor_penggerak_harian')
            ->whereMonth('ganti_motor_penggerak_harian', $dateNow->format('m'))
            ->whereYear('ganti_motor_penggerak_harian', $dateNow->format('Y'))
            ->count();

        $jumlahKompresor = Pipping::whereNotNull('perbaikan_motor_kompresor_harian')
            ->whereMonth('perbaikan_motor_kompresor_harian', $dateNow->format('m'))
            ->whereYear('perbaikan_motor_kompresor_harian', $dateNow->format('Y'))
            ->count();

        $jumlahGreaseRoller = Pipping::whereNotNull('perbaikan_grease_pada_roller_harian')
            ->whereMonth('perbaikan_grease_pada_roller_harian', $dateNow->format('m'))
            ->whereYear('perbaikan_grease_pada_roller_harian', $dateNow->format('Y'))
            ->count();

        $jumlahEmergency = Pipping::whereNotNull('perbaikan_emergency_autostop_harian')
            ->whereMonth('perbaikan_emergency_autostop_harian', $dateNow->format('m'))
            ->whereYear('perbaikan_emergency_autostop_harian', $dateNow->format('Y'))
            ->count();

        $jumlahRollpresss = Strip::whereNotNull('perbaikan_rollpress_harian')
            ->whereMonth('perbaikan_rollpress_harian', $dateNow->format('m'))
            ->whereYear('perbaikan_rollpress_harian', $dateNow->format('Y'))
            ->count();

        $jumlahAsahan = Strip::whereNotNull('ganti_asahan_harian')
            ->whereMonth('ganti_asahan_harian', $dateNow->format('m'))
            ->whereYear('ganti_asahan_harian', $dateNow->format('Y'))
            ->count();

        $jumlahPotong = Strip::whereNotNull('ganti_pisau_potong_harian')
            ->whereMonth('ganti_pisau_potong_harian', $dateNow->format('m'))
            ->whereYear('ganti_pisau_potong_harian', $dateNow->format('Y'))
            ->count();

        $jumlahPenggerak = Strip::whereNotNull('ganti_motor_penggerak_harian')
            ->whereMonth('ganti_motor_penggerak_harian', $dateNow->format('m'))
            ->whereYear('ganti_motor_penggerak_harian', $dateNow->format('Y'))
            ->count();

        $jumlahVakum = Strip::whereNotNull('perbaikan_motor_vakum_harian')
            ->whereMonth('perbaikan_motor_vakum_harian', $dateNow->format('m'))
            ->whereYear('perbaikan_motor_vakum_harian', $dateNow->format('Y'))
            ->count();

        $jumlahRoller = Strip::whereNotNull('pemberian_grease_pada_roller_harian')
            ->whereMonth('pemberian_grease_pada_roller_harian', $dateNow->format('m'))
            ->whereYear('pemberian_grease_pada_roller_harian', $dateNow->format('Y'))
            ->count();
            
        $jumlahAutostop = Strip::whereNotNull('perbaikan_emergency_autostop_harian')
            ->whereMonth('perbaikan_emergency_autostop_harian', $dateNow->format('m'))
            ->whereYear('perbaikan_emergency_autostop_harian', $dateNow->format('Y'))
            ->count();

        $data = [
            ['Jahitan Loncat (Sewing)', $jumlahJahitanLoncat],
            ['Benang Putusan (Sewing)', $jumlahBenangPutusan],
            ['Ganti Gunting/Pisau (Sewing)', $jumlahGantiGuntingPisau],
            ['Ganti Rotary (Sewing)', $jumlahGantiRotary],
            ['Ganti Suttel Hook (Sewing)', $jumlahGantiSuttelHook],
            ['Bersihkan Bak Mesin (Sewing)', $jumlahBakMesin],
            ['Pisau Tidak Motong (Sewing)', $jumlahPisauTidakMotong],
            ['Kebersihan Mesin (Sewing)', $jumlahKebersihanMesin],
            ['Cek Kondisi Minyak Mesin (Sewing)', $jumlahKondisiMinyakMesin],
            ['Ganti Sparepart Lainnya (Sewing)', $jumlahGantiSparepartLainnya],
            ['Perbaikan Electrical Instalasi (Band Knife)', $jumlahElectricalInstalasi],
            ['Ganti/Perbaikan Motor Bearing Pully (Band Knife)', $jumlahMotorBearingPully],
            ['Ganti/Perbaikan Pully Atas Bearing (Band Knife)', $jumlahPullyAtasBearing],
            ['Ganti Gerinda Asahan Pisau (Band Knife)', $jumlahGantiGerindaAsahanPisau],
            ['Ganti/Perbaikan Dinamo Kompresor (Band Knife)', $jumlahDinamoKompresor],
            ['Servis/Bersihkan Mesin (Band Knife)', $jumlahBersihkanMesin],
            ['Ganti Sparepart Lainnya (Band Knife)', $jumlahGantiSparepartKnife],
            ['Pemberian Minyak pada Ril (Pattern)', $jumlahMinyakRil],
            ['Ganti Pulpen (Pattern)', $jumlahPulpen],
            ['Ganti Pisau (Pattern)', $jumlahPisau],
            ['Ganti Komponen Elektro (Pattern)', $jumlahKomponenElektro],
            ['Ganti Instalasi Kelistrikan (Pattern)', $jumlahInstalasiKelistrikan],
            ['Ganti Vacum (Pattern)', $jumlahVacum],
            ['Ganti Belt (Pattern)', $jumlahBelt],
            ['Pisau Tumpul (KM Cutting)', $jumlahPisauTumpul],
            ['Minyak Habis (KM Cutting)', $jumlahMinyakHabis],
            ['Ganti Abrasif (KM Cutting)', $jumlahAbrasif],
            ['Check Instalasi Kabel (KM Cutting)', $jumlahInstalasiKabel],
            ['Check Kondisi Mesin (KM Cutting)', $jumlahKondisiMesin],
            ['Ganti Belt Atas (Fuse)', $jumlahBeltAtas],
            ['Ganti Belt Bawah (Fuse)', $jumlahBeltBawah],
            ['Ganti Bearing Atas (Fuse)', $jumlahBearingAtas],
            ['Ganti Bearing Bawah (Fuse)', $jumlahBearingBawah],
            ['Ganti Rollpress Atas (Fuse)', $jumlahRollpressAtas],
            ['Ganti Rollpress Bawah (Fuse)', $jumlahRollpressBawah],
            ['Ganti Switch Kontrol Belt (Fuse)', $jumlahSwitchKontrol],
            ['Ganti Kontrol Speed (Fuse)', $jumlahKontrolSpeed],
            ['Ganti Kontrol Temperatur (Fuse)', $jumlahTemperatur],
            ['Perbaikan Gear Box (Fabric)', $jumlahGearBox],
            ['Ganti Oli Gear Box (Fabric)', $jumlahOliGear],
            ['Perbaikan Tegangan Rantai (Fabric)', $jumlahRantai],
            ['Perbaikan Elektrikal dan Motor (Fabric)', $jumlahMotor],
            ['Pemberian Grease pada Roller (Fabric)', $jumlahGreaseRoller],
            ['Ganti Karet Roller (Fabric)', $jumlahKaret],
            ['Perbaikan Instalasi Electrical (Metal Detector)', $jumlahInstalasiElectrical],
            ['Perbaikan Switch Auto Stop (Metal Detector)', $jumlahSwitchAutoStop],
            ['Perbaikan Belt (Metal Detector)', $jumlahBelts],
            ['Perbaikan Dinamo Motor (Metal Detector)', $jumlahDinamoMotor],
            ['Perbaikan Sensitifitas Metal (Metal Detector)', $jumlahSensitifitas],
            ['Check Sparepart Lainnya (Metal Detector)', $jumlahSparepartLainnya],
            ['Perbaikan Plotter Head (Plotter)', $jumlahPlotterHead],
            ['Perbaikan Stand Pole (Plotter)', $jumlahStandPole],
            ['Perbaikan Foot Bar (Plotter)', $jumlahFootBar],
            ['Perbaikan Rolling Paper Role (Plotter)', $jumlahRollingPaper],
            ['Perbaikan Sending Paper Role (Plotter)', $jumlahSendingPaper],
            ['Perbaikan Balancing Pole (Plotter)', $jumlahBalancing],
            ['Perbaikan Puiling Pole (Plotter)', $jumlahPuiling],
            ['Perbaikan Paper Roller Hoop (Plotter)', $jumlahRollerHoop],
            ['Perbaikan Connection Cable (Plotter)', $jumlahConnection],
            ['Perbaikan/Ganti Print Head (Plotter)', $jumlahPrintHead],
            ['Perbaikan Rollpress (Rewinding Pipping)', $jumlahRollpress],
            ['Ganti Counter (Rewinding Pipping)', $jumlahCounter],
            ['Ganti Pisau Potong (Rewinding Pipping)', $jumlahPisau],
            ['Ganti Motor Penggerak (Rewinding Pipping)', $jumlahMotorPenggerak],
            ['Perbaikan Motor Kompresor (Rewinding Pipping)', $jumlahKompresor],
            ['Perbaikan Grease pada Roller (Rewinding Pipping)', $jumlahGreaseRoller],
            ['Perbaikan Emergency Auto Stop (Rewinding Pipping)', $jumlahEmergency],
            ['Perbaikan Rollpress (Strip Cutter)', $jumlahRollpresss],
            ['Ganti Asahan (Strip Cutter)', $jumlahAsahan],
            ['Ganti Pisau Potong (Strip Cutter)', $jumlahPotong],
            ['Ganti Motor Penggerak (Strip Cutter)', $jumlahPenggerak],
            ['Perbaikan Motor Vakum (Strip Cutter)', $jumlahVakum],
            ['Pemberian Grease pada Roller (Strip Cutter)', $jumlahRoller],
            ['Perbaikan Emergency Auto Stop (Strip Cutter)', $jumlahAutostop],
        ];

        return collect($data);
    }

    public function headings(): array
    {
        return ['Kategori', 'Jumlah'];
    }
}
