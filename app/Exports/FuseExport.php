<?php

namespace App\Exports;

use App\Models\Fuse;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class FuseExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Fuse::all();
    }

    public function headings(): array
    {
        return ['Serial Number', 
        'Tipe', 
        'Label', 
        'Merk Mesin', 
        'Bagian', 
        'Tahun', 
        'Check Belt Atas (Bulanan)', 
        'Check Belt Bawah (Bulanan)', 
        'Tension Belt Atas (Bulanan)', 
        'Tension Belt Bawah (Bulanan)', 
        'Bearing Tekanan Belt Atas (Bulanan)', 
        'Bearing Tekanan Belt Bawah (Bulanan)', 
        'Check Kondisi Roll Press Atas (Bulanan)', 
        'Check Kondisi Roll Press Bawah (Bulanan)', 
        'Check Switch Control Belt (Bulanan)', 
        'Check Kontrol Speed (Bulanan)', 
        'Check Kontrol Temperatur (Bulanan)', 
        'Komponen Lainnya (Bulanan)', 
        'Dicek Tanggal', 
        'Tahun Pembelian', 
        'Ganti Belt Atas (Harian)', 
        'Ganti Belt Bawah (Harian)', 
        'Perbaikan Tension Belt Atas (Harian)', 
        'Perbaikan Tension Belt Bawah (Harian)', 
        'Ganti Bearing Tekanan Belt Atas (Harian)', 
        'Ganti Bearing Tekanan Belt Bawah (Harian)', 
        'Ganti Roll Press Atas (Harian)', 
        'Ganti Roll Press Bawah (Harian)', 
        'Ganti Switch Control Belt (Harian)', 
        'Ganti Kontrol Speed (Harian)', 
        'Ganti Kontrol Temperatur (Harian)', 
        'Servis dan Bersihkan Mesin (Harian)', 
        'Komponen Lainnya (Harian)',  
        'Jenis Sparepart yang Diganti', 
        'Tanggal Sparepart Diganti', 
        'Harga Sparepart'];
    }
}
