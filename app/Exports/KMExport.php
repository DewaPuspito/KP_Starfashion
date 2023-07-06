<?php

namespace App\Exports;

use App\Models\KM;
use Maatwebsite\Excel\Concerns\FromCollection;

class KMExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return KM::all();
    }

    public function headings(): array
    {
        return ['Serial Number', 
        'Tipe', 
        'Label', 
        'Merk Mesin', 
        'Bagian', 
        'Tahun', 
        'Automatic Cut Out Switch (Bulanan)', 
        'Insulate Plate (Bulanan)', 
        'Oil Tank (Bulanan)', 
        'Oil Tank Cap (Bulanan)', 
        'RH Guide (Bulanan)', 
        'LH Guide (Bulanan)', 
        'Bellcrank with Pin and Bushing (Bulanan)', 
        'Gear and Shaft (Bulanan)', 
        'Screwshaft LH RH Extension (Bulanan)', 
        'LH Square Shaft (Bulanan)', 
        'Thread Guide (Bulanan)', 
        'Sparepart Lainnya (Bulanan)', 
        'Dicek Tanggal', 
        'Tahun Pembelian', 
        'Pisau Tumpul (Harian)', 
        'Minyak Habis (Harian)', 
        'Ganti Abrasif (Harian)', 
        'Check Instalasi Kabel (Harian)', 
        'Kebersihan Mesin (Harian)', 
        'Check Kondisi Mesin (Harian)',
        'Komponen Lainnya (Harian)', 
        'Jenis Sparepart yang Diganti', 
        'Tanggal Sparepart Diganti', 
        'Harga Sparepart'];
    }
}
