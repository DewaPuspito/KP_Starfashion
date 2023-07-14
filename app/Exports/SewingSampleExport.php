<?php

namespace App\Exports;

use App\Models\SewingSample;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class SewingSampleExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return SewingSample::all();
    }

    public function headings(): array
    {
        return ['Serial Number', 
        'Tipe', 
        'Label', 
        'Jenis Mesin',
        'Merk Mesin', 
        'Bagian', 
        'Tahun', 
        'Check Bobbin Case (Bulanan)', 
        'Needle Guard (Bulanan)', 
        'Check Belt Cover (Bulanan)', 
        'Check Wheels Machine (Bulanan)', 
        'Check Dinamo Guard (Bulanan)', 
        'Cleanliness (Bulanan)', 
        'Check Oli (Bulanan)', 
        'Check Menggunakan Magnet Pen (Bulanan)', 
        'Ganti Oli (Bulanan)', 
        'Check Bak Mesin (Bulanan)', 
        'Check Tiang Benang (Bulanan)', 
        'Check Spring Tension (Bulanan)', 
        'Check Jalur Benang (Bulanan)', 
        'Dicek Tanggal', 
        'Tahun Pembelian', 
        'Jahitan Loncat (Harian)', 
        'Benang Putusan (Harian)', 
        'Ganti Gunting/Pisau (Harian)', 
        'Ganti Rotary (Harian)', 
        'Ganti Suttel Hook (Harian)', 
        'Gulungan Spull (Harian)', 
        'Ganti Needle Plate (Harian)', 
        'Setel Timming (Harian)', 
        'Bersihkan Bak Mesin (Harian)', 
        'Pisau Tidak Motong (Harian)', 
        'Cek Angin Kompresor (Harian)', 
        'Kebersihan Mesin (Harian)', 
        'Cek Kondisi Minyak Mesin (Harian)', 
        'Ganti Sparepart Lainnya (Harian)', 
        'Jenis Sparepart yang Diganti', 
        'Tanggal Sparepart Diganti', 
        'Harga Sparepart'];
    }
}
