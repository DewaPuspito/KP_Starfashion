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
        Schema::create('plotter_check', function (Blueprint $table) {
            $table->id('serial_number');
            $table->string('tipe');
            $table->integer('label');
            $table->string('merk_mesin');
            $table->string('bagian');
            $table->year('tahun');
            $table->string('check_plotter_head_bulanan');
            $table->string('check_stand_pole_bulanan');
            $table->string('check_foot_bar_bulanan');
            $table->string('check_rolling_paper_pole_bulanan');
            $table->string('check_sending_paper_pole_bulanan');
            $table->string('check_balancing_pole_bulanan');
            $table->string('check_puiling_pole_bulanan');
            $table->string('check_paper_roller_hoop_bulanan');
            $table->string('check_connection_cable_bulanan');
            $table->string('check_print_head_bulanan');
            $table->string('check_kebersihan_bulanan');
            $table->date('dicek_tanggal');
            $table->year('tahun_pembelian');
            $table->date('perbaikan_plotter_head_harian');
            $table->date('perbaikan_stand_pole_harian');
            $table->date('perbaikan_foot_bar_harian');
            $table->date('perbaikan_rolling_paper_role_harian');
            $table->date('perbaikan_sending_paper_role_harian');
            $table->date('perbaikan_balancing_pole_harian');
            $table->date('perbaikan_puiling_pole_harian');
            $table->date('perbaikan_paper_roller_hoop_harian');
            $table->date('perbaikan_connection_cable_harian');
            $table->date('perbaikan_ganti_print_head_harian');
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
        Schema::dropIfExists('plotter_check');
    }
};
