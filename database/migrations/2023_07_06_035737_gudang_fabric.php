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
        Schema::create('gudang_fabric', function (Blueprint $table) {
            $table->id('serial_number');
            $table->string('tipe');
            $table->integer('label');
            $table->string('merk_mesin');
            $table->string('bagian');
            $table->year('tahun');
            $table->string('check_gear_box_bulanan');
            $table->string('ganti_oli_gear_box_bulanan');
            $table->string('check_tegangan_rantai_bulanan');
            $table->string('check_electrical_dan_motor_bulanan');
            $table->string('kebersihan_mesin_bulanan');
            $table->string('pemberian_grease_pada_roller_bulanan');
            $table->string('komponen_lainnya_bulanan');
            $table->date('dicek_tanggal');
            $table->year('tahun_pembelian');
            $table->date('perbaikan_gear_box_harian');
            $table->date('ganti_oli_gear_box_harian');
            $table->date('perbaikan_tegangan_rantai_harian');
            $table->date('perbaikan_electrical_dan_motor_harian');
            $table->date('kebersihan_mesin_harian');
            $table->date('pemberian_grease_pada_roller_harian');
            $table->date('penggantian_karet_roller_harian');
            $table->date('komponen_lainnya_harian');
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
