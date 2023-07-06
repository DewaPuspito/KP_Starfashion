<?php

namespace App\Exports;

use App\Models\Strip;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class StripExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Strip::all();
    }

    public function headings(): array
    {
        return ['Serial Number', 
        'Tipe', 
        'Label',
        'Merk Mesin', 
        'Bagian', 
        'Tahun', 
        'Check Pisau Potong (Bulanan)', 
        'Check Asahan (Bulanan)', 
        'Check Fungsi Jalur Air Asahan (Bulanan)', 
        'Check Sensor (Bulanan)', 
        'Check Motor Vakum (Bulanan)', 
        'Check Kondisi Vanbelt Penggerak (Bulanan)', 
        'Check Instalasi Electrical (Bulanan)', 
        'Komponen Lainnya (Bulanan)', 
        'Kebersihan Mesin (Bulanan)',
        'Dicek Tanggal', 
        'Tahun Pembelian', 
        'Perbaikan Roll Press (Harian)', 
        'Ganti Asahan (Harian)', 
        'Ganti Pisau Potong (Harian)', 
        'Ganti Motor Penggerak (Harian)', 
        'Ganti Motor Vakum (Harian)', 
        'Perbaikan Grease pada Roller (Harian)', 
        'Perbaikan Emergency Auto Stop (Harian)', 
        'Komponen Lainnya (Harian)',  
        'Kebersihan Mesin (Harian)', 
        'Jenis Sparepart yang Diganti', 
        'Tanggal Sparepart Diganti', 
        'Harga Sparepart'];
    }
}
