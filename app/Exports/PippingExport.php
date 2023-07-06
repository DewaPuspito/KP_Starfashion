<?php

namespace App\Exports;

use App\Models\Pipping;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PippingExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Pipping::all();
    }

    public function headings(): array
    {
        return ['Serial Number', 
        'Tipe', 
        'Label',
        'Merk Mesin', 
        'Bagian', 
        'Tahun', 
        'Pengecekan Roll Press (Bulanan)', 
        'Pengecekan Counter (Bulanan)', 
        'Pengecekan Pisau Potong (Bulanan)', 
        'Pengecekan Motor Penggerak (Bulanan)', 
        'Pengecekan Motor Kompresor (Bulanan)', 
        'Check Kondisi Rantai (Bulanan)', 
        'Check Instalasi Electrical dan Sensor (Bulanan)', 
        'Komponen Lainnya (Bulanan)', 
        'Kebersihan Mesin (Bulanan)', 
        'Dicek Tanggal', 
        'Tahun Pembelian', 
        'Perbaikan Roll Press (Harian)', 
        'Ganti Counter (Harian)', 
        'Ganti Pisau Potong (Harian)', 
        'Ganti Motor Penggerak (Harian)', 
        'Perbaikan Motor Kompresor (Harian)', 
        'Perbaikan Grease pada Roller (Harian)', 
        'Perbaikan Emergency Auto Stop (Harian)', 
        'Komponen Lainnya (Harian)',  
        'Kebersihan Mesin (Harian)', 
        'Jenis Sparepart yang Diganti', 
        'Tanggal Sparepart Diganti', 
        'Harga Sparepart'];
    }
}
