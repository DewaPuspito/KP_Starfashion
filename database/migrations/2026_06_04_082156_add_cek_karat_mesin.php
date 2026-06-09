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
      foreach ([
            'sewing_line_and_sample_check',
            'plotter_check',
            'band_knife_check',
            'cutter_pattern_check',
            'cutting_km_check',
            'fuse_machine_check',
            'metal_detector_check',
            'rewinding_pipping_check',
            'strip_cutter_check',
        ] as $tableName) {
            Schema::table($tableName, function (Blueprint $table) {
                $table->string('cek_karat_mesin')->nullable();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       foreach ([
            'sewing_line_and_sample_check',
            'plotter_check',
            'band_knife_check',
            'cutter_pattern_check',
            'cutting_km_check',
            'fuse_machine_check',
            'metal_detector_check',
            'rewinding_pipping_check',
            'strip_cutter_check',
        ] as $tableName) {
            Schema::table($tableName, function (Blueprint $table) {
                $table->dropColumn('cek_karat_mesin');
            });
        }
    }
};
