<?php

namespace App\Exports;

use App\Models\Sparepart;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class SparepartExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Sparepart::all();
    }

    public function headings(): array
    {
        return ['ID Sparepart', 
        'Nama Sparepart', 
        'Harga Sparepart', 
        'Tanggal Masuk',
        'Tanggal Keluar'];
    }
}
