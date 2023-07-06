<?php

namespace App\Exports;

use App\Models\MetalDetector;
use Maatwebsite\Excel\Concerns\FromCollection;

class MetalDetectorExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return MetalDetector::all();
    }

    public function headings(): array
    {
        return ['Serial Number', 
        'Tipe', 
        'Label',
        'Merk Mesin', 
        'Bagian', 
        'Tahun', 
        'Check Instalasi Electrical (Bulanan)', 
        'Check Switch Auto Stop (Bulanan)', 
        'Check Belt (Bulanan)', 
        'Check Dinamo Motor (Bulanan)', 
        'Check Sensifitas Metal (Bulanan)', 
        'Check Spare Parts Lainnya (Bulanan)', 
        'Kebersihan Mesin (Bulanan)', 
        'Dicek Tanggal', 
        'Tahun Pembelian', 
        'Perbaikan Instalasi Electrical (Harian)', 
        'Perbaikan Switch Auto Stop (Harian)', 
        'Perbaikan Belt (Harian)', 
        'Perbaikan Dinamo Motor (Harian)', 
        'Perbaikan Sensifitas Metal (Harian)', 
        'Check Spare Parts Lainnya (Harian)', 
        'Kebersihan Mesin (Harian)', 
        'Jenis Sparepart yang Diganti', 
        'Tanggal Sparepart Diganti', 
        'Harga Sparepart'];
    }
}
