<?php

namespace App\Exports;

use App\Models\Fabric;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class FabricExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Fabric::all();
    }
    
    public function headings(): array
    {
        return ['Serial Number', 
        'Tipe', 
        'Label', 
        'Merk Mesin', 
        'Bagian', 
        'Tahun', 
        'Check Gear Box (Bulanan)', 
        'Ganti Oli Gear Box (Bulanan)', 
        'Check Tegangan Rantai (Bulanan)', 
        'Check Electrical dan Motor (Bulanan)', 
        'Kebersihan Mesin (Bulanan)', 
        'Pemberian Grease pada Roller (Bulanan)', 
        'Check Karat Mesin (Bulanan)', 
        'Komponen Lainnya (Bulanan)', 
        'Dicek Tanggal', 
        'Tahun Pembelian', 
        'Perbaikan Gear Box (Harian)', 
        'Ganti Oli Gear Box (Harian)', 
        'Perbaikan Tegangan Rantai (Harian)', 
        'Perbaikan Electrical dan Motor (Harian)', 
        'Kebersihan Mesin (Harian)', 
        'Pemberian Grease pada Roller (Harian)', 
        'Ganti Karet Roller (Harian)', 
        'Komponen Lainnya (Harian)',  
        'Jenis Sparepart yang Diganti', 
        'Tanggal Sparepart Diganti', 
        'Harga Sparepart'];
    }
}
