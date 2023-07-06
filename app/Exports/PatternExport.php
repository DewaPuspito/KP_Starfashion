<?php

namespace App\Exports;

use App\Models\Pattern;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PatternExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Pattern::all();
    }

    public function headings(): array
    {
        return ['Serial Number', 
        'Tipe', 
        'Label',
        'Merk Mesin', 
        'Bagian', 
        'Tahun', 
        'Pemberian Minyak pada Ril (Bulanan)', 
        'Check Pulpen (Bulanan)', 
        'Check Pisau (Bulanan)', 
        'Check Elektro (Bulanan)', 
        'Check Instalasi Kelistrikan (Bulanan)', 
        'Check Vacum (Bulanan)', 
        'Check Belt (Bulanan)', 
        'Dicek Tanggal', 
        'Tahun Pembelian', 
        'Pemberian Minyak pada Ril (Harian)', 
        'Ganti Pulpen (Harian)', 
        'Ganti Pisau (Harian)', 
        'Ganti Komponen Elektro (Harian)', 
        'Ganti Instalasi Kelistrikan (Harian)', 
        'Ganti Vacum (Harian)', 
        'Ganti Belt (Harian)', 
        'Kebersihan Mesin (Harian)', 
        'Jenis Sparepart yang Diganti', 
        'Tanggal Sparepart Diganti', 
        'Harga Sparepart'];
    }
}
