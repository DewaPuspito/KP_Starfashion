<?php

namespace App\Exports;

use App\Models\SewingSample;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

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
        ];

        return collect($data);
    }

    public function headings(): array
    {
        return ['Kategori', 'Jumlah'];
    }
}
