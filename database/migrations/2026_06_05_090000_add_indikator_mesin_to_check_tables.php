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
        $tables = [
            'band_knife_check',
            'cutter_pattern_check',
            'cutting_km_check',
            'fuse_machine_check',
            'metal_detector_check',
            'plotter_check',
            'rewinding_pipping_check',
            'strip_cutter_check',
            'sewing_line_and_sample_check',
            'gudang_fabric',
        ];

        foreach ($tables as $tableName) {
            if (Schema::hasTable($tableName) && !Schema::hasColumn($tableName, 'indikator_mesin')) {
                Schema::table($tableName, function (Blueprint $table) {
                    $table->string('indikator_mesin')->nullable();
                });
            }
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $tables = [
            'band_knife_check',
            'cutter_pattern_check',
            'cutting_km_check',
            'fuse_machine_check',
            'metal_detector_check',
            'plotter_check',
            'rewinding_pipping_check',
            'strip_cutter_check',
            'sewing_line_and_sample_check',
            'gudang_fabric',
        ];

        foreach ($tables as $tableName) {
            if (Schema::hasTable($tableName) && Schema::hasColumn($tableName, 'indikator_mesin')) {
                Schema::table($tableName, function (Blueprint $table) {
                    $table->dropColumn('indikator_mesin');
                });
            }
        }
    }
};
