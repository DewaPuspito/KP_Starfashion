<?php

namespace App\Exports;

use App\Models\Plotter;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PlotterExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Plotter::all();
    }

    public function headings(): array
    {
        return ['Serial Number', 
        'Tipe', 
        'Label', 
        'Merk Mesin', 
        'Bagian', 
        'Tahun', 
        'Check Plotter Head (Bulanan)', 
        'Check Stand Pole (Bulanan)', 
        'Check Foot Bar (Bulanan)', 
        'Check Rolling Paper Role (Bulanan)', 
        'Check Sending Paper Role (Bulanan)', 
        'Check Balancing Pole (Bulanan)', 
        'Check Puiling Pole (Bulanan)', 
        'Check Paper Roller Hoop (Bulanan)', 
        'Check Connection Cable (Bulanan)', 
        'Check Print Head (Bulanan)', 
        'Check Kebersihan (Bulanan)',
        'Dicek Tanggal', 
        'Tahun Pembelian', 
        'Perbaikan Plotter Head (Harian)', 
        'Perbaikan Stand Pole (Harian)', 
        'Perbaikan Foot Bar (Harian)', 
        'Perbaikan Rolling Paper Role (Harian)', 
        'Perbaikan Sending Paper Role (Harian)', 
        'Perbaikan Balancing Pole (Harian)', 
        'Perbaikan Puiling Pole (Harian)', 
        'Perbaikan Paper Roller Hoop (Harian)', 
        'Perbaikan Connection Cable (Harian)', 
        'Perbaikan/Ganti Print Head (Harian)',  
        'Kebersihan Mesin (Harian)', 
        'Jenis Sparepart yang Diganti', 
        'Tanggal Sparepart Diganti', 
        'Harga Sparepart'];
    }
}
