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
        Schema::create('cutter_pattern_check', function (Blueprint $table) {
            $table->id('serial_number');
            $table->string('tipe');
            $table->integer('label');
            $table->string('merk_mesin');
            $table->string('bagian');
            $table->year('tahun');
            $table->string('pemberian_minyak_pada_ril_bulanan');
            $table->string('check_pulpen_bulanan');
            $table->string('check_pisau_bulanan');
            $table->string('check_elektro_bulanan');
            $table->string('check_instalasi_kelistrikan_bulanan');
            $table->string('check_vacum_bulanan');
            $table->string('check_belt_bulanan');
            $table->date('dicek_tanggal');
            $table->year('tahun_pembelian');
            $table->date('pemberian_minyak_pada_ril_harian');
            $table->date('ganti_pulpen_harian');
            $table->date('ganti_pisau_harian');
            $table->date('ganti_komponen_elektro_harian');
            $table->date('ganti_instalasi_kelistrikan_harian');
            $table->date('ganti_vacum_harian');
            $table->date('ganti_belt_harian');
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
