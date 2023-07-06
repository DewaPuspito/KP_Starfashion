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
            $table->string('check_bobin_chase_bulanan');
            $table->string('needle_guard_bulanan');
            $table->string('check_belt_cover_bulanan');
            $table->string('check_wheels_machine_bulanan');
            $table->string('check_dinamo_guard_bulanan');
            $table->string('cleanliness_bulanan');
            $table->string('check_oil_bulanan');
            $table->date('dicek_tanggal');
            $table->year('tahun_pembelian');
            $table->date('jahitan_loncat_harian');
            $table->date('benang_putusan_harian');
            $table->date('ganti_gunting_pisau_harian');
            $table->date('ganti_rotary_harian');
            $table->date('ganti_suttel_hook_harian');
            $table->date('gulungan_spull_harian');
            $table->date('ganti_needle_plate_harian');
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
