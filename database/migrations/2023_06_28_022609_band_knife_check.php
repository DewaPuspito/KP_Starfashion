<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('band_knife_check', function (Blueprint $table) {
            $table->id('serial_number');
            $table->string('tipe');
            $table->integer('label');
            $table->string('merk_mesin');
            $table->string('bagian');
            $table->year('tahun');
            $table->string('check_electrical_instalasi_bulanan');
            $table->string('check_motor_bearing_pully_bulanan');
            $table->string('check_kekencangan_pisau_bulanan');
            $table->string('check_pullyatas_bearing_bulanan');
            $table->string('check_gerinda_asahan_pisau_bulanan');
            $table->string('check_dinamo_kompresor_bulanan');
            $table->date('dicek_tanggal');
            $table->year('tahun_pembelian');
            $table->date('perbaikan_electrical_instalasi_harian');
            $table->date('ganti_perbaikan_motor_bearing_pully_harian');
            $table->date('ganti_perbaikan_pullyatas_bearing_harian');
            $table->date('ganti_gerinda_asahan_pisau_harian');
            $table->date('ganti_perbaikan_dinamo_kompresor_harian');
            $table->date('servis_bersihkan_mesin_harian');
            $table->date('ganti_sparepart_lainnya_harian');
            $table->string('jenis_sparepart_yang_diganti');
            $table->double('harga_sparepart', $precision = 12, $scale = 12);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
