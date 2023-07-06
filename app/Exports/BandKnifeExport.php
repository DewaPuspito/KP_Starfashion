<?php

namespace App\Exports;

use App\Models\BandKnife;
use Maatwebsite\Excel\Concerns\FromCollection;

class BandKnifeExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return BandKnife::all();
    }

    public function headings(): array
    {
        return ['Serial Number', 
        'Tipe', 
        'Label', 
        'Merk Mesin', 
        'Bagian', 
        'Tahun', 
        'Check Electrical Instalasi (Bulanan)', 
        'Check Motor Bearing Pully (Bulanan)', 
        'Check Kekencangan Pisau (Bulanan)', 
        'Check Pully Atas Bearing (Bulanan)', 
        'Check Gerinda/Asahan Pisau (Bulanan)', 
        'Check Dinamo Kompresor (Bulanan)',
        'Dicek Tanggal', 
        'Tahun Pembelian', 
        'Perbaikan Electrical Instalasi (Harian)', 
        'Ganti/Perbaikan Motor Bearing Pully (Harian)', 
        'Ganti/Perbaikan Pully Atas Bearing (Harian)', 
        'Ganti Gerinda/Asahan Pisau (Harian)', 
        'Ganti/Perbaikan Dinamo Kompresor (Harian)', 
        'Servis Bersihkan Mesin (Harian)', 
        'Ganti Sparepart Lainnya (Harian)', 
        'Jenis Sparepart yang Diganti', 
        'Tanggal Sparepart Diganti', 
        'Harga Sparepart'];
    }
}
