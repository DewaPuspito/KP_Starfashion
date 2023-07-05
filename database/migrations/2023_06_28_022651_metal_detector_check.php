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
        Schema::create('metal_detector_check', function (Blueprint $table) {
            $table->id('serial_number');
            $table->string('tipe');
            $table->integer('label');
            $table->string('merk_mesin');
            $table->string('bagian');
            $table->year('tahun');
            $table->string('check_instalasi_electrical_bulanan');
            $table->string('check_switch_auto_stop_bulanan');
            $table->string('check_belt_bulanan');
            $table->string('check_dinamo_motor_bulanan');
            $table->string('check_sensitifitas_metal_bulanan');
            $table->string('check_spare_parts_lainnya_bulanan');
            $table->string('kebersihan_mesin_bulanan');
            $table->date('dicek_tanggal');
            $table->year('tahun_pembelian');
            $table->date('perbaikan_instalasi_electrical_harian');
            $table->date('perbaikan_switch_auto_stop_harian');
            $table->date('perbaikan_belt_harian');
            $table->date('perbaikan_dinamo_motor_harian');
            $table->date('perbaikan_sensitifitas_metal_harian');
            $table->date('check_spareparts_lainnya_harian');
            $table->date('kebersihan_mesin_harian');
            $table->string('jenis_sparepart_yang_diganti');
            $table->date('tanggal_sparepart_diganti');
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
