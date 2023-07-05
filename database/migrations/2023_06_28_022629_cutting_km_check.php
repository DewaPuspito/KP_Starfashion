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
        Schema::create('cutting_km_check', function (Blueprint $table) {
            $table->id('serial_number');
            $table->string('tipe');
            $table->integer('label');
            $table->string('merk_mesin');
            $table->string('bagian');
            $table->year('tahun');
            $table->string('automatic_cutout_switch_bulanan');
            $table->string('insulate_plate_bulanan');
            $table->string('oil_tank_bulanan');
            $table->string('oil_tank_cap_bulanan');
            $table->string('rh_guide_bulanan');
            $table->string('lh_guide_bulanan');
            $table->string('bellcrank_with_pin_and_bushing_bulanan');
            $table->string('gear_and_shaft_bulanan');
            $table->string('screwshaft_lh_rh_extension_bulanan');
            $table->string('lh_square_shaft_bulanan');
            $table->string('thread_guide_bulanan');
            $table->string('sparepart_lainnya_bulanan');
            $table->date('dicek_tanggal');
            $table->year('tahun_pembelian');
            $table->date('pisau_tumpul_harian');
            $table->date('minyak_habis_harian');
            $table->date('ganti_abrasif_harian');
            $table->date('check_instalasi_kabel_harian');
            $table->date('kebersihan_mesin_harian');
            $table->date('check_kondisi_mesin_harian');
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
