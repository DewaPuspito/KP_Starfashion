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
        Schema::create('fuse_machine_check', function (Blueprint $table) {
            $table->id('serial_number');
            $table->string('tipe');
            $table->integer('label');
            $table->string('merk_mesin');
            $table->string('bagian');
            $table->year('tahun');
            $table->string('check_belt_atas_bulanan');
            $table->string('check_belt_bawah_bulanan');
            $table->string('tension_belt_atas_bulanan');
            $table->string('tension_belt_bawah_bulanan');
            $table->string('bearing_tekanan_belt_atas_bulanan');
            $table->string('bearing_tekanan_belt_bawah_bulanan');
            $table->string('check_kondisi_rollpress_atas_bulanan');
            $table->string('check_kondisi_rollpress_bawah_bulanan');
            $table->string('check_switchkontrol_belt_bulanan');
            $table->string('check_kontrol_speed_bulanan');
            $table->string('check_kontrol_temperatur_bulanan');
            $table->string('komponen_lainnya_bulanan');
            $table->date('dicek_tanggal');
            $table->year('tahun_pembelian');
            $table->date('ganti_belt_atas_harian');
            $table->date('ganti_belt_bawah_harian');
            $table->date('perbaikan_tension_belt_atas_harian');
            $table->date('perbaikan_tension_belt_bawah_harian');
            $table->date('ganti_bearing_tekanan_belt_atas_harian');
            $table->date('ganti_bearing_tekanan_belt_bawah_harian');
            $table->date('ganti_rollpress_atas_harian');
            $table->date('ganti_rollpress_bawah_harian');
            $table->date('ganti_switchkontrol_belt_harian');
            $table->date('ganti_kontrol_speed_harian');
            $table->date('ganti_kontrol_temperatur_harian');
            $table->date('servis_dan_bersihkan_mesin_harian');
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
