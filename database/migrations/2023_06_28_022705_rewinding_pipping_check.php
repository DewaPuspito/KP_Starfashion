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
        Schema::create('rewinding_pipping_check', function (Blueprint $table) {
            $table->id('serial_number');
            $table->string('tipe');
            $table->integer('label');
            $table->string('merk_mesin');
            $table->string('bagian');
            $table->year('tahun');
            $table->string('pengecekan_rollpress_bulanan');
            $table->string('pengecekan_counter_bulanan');
            $table->string('pengecekan_pisau_potong_bulanan');
            $table->string('pengecekan_motor_penggerak_bulanan');
            $table->string('pengecekan_motor_kompresor_bulanan');
            $table->string('check_kondisi_rantai_bulanan');
            $table->string('check_instalasi_electrical_dan_sensor_bulanan');
            $table->string('komponen_lainnya_bulanan');
            $table->string('kebersihan_mesin_bulanan');
            $table->date('dicek_tanggal');
            $table->year('tahun_pembelian');
            $table->date('perbaikan_rollpress_harian');
            $table->date('perbaikan_rollpress_harian');
            $table->date('ganti_pisau_potong_harian');
            $table->date('ganti_motor_penggerak_harian');
            $table->date('perbaikan_motor_kompresor_harian');
            $table->date('perbaikan_grease_pada_roller_harian');
            $table->date('perbaikan_emergency_autostop_harian');
            $table->date('komponen_lainnya_harian');
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
