<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (!Schema::hasColumn('gudang_fabric', 'indikator_mesin')) {
            Schema::table('gudang_fabric', function (Blueprint $table) {
                $table->string('indikator_mesin')->nullable();
            });
        }

        if (Schema::hasColumn('gudang_fabric', 'jenis_sparepart_yang_diganti')) {
            DB::statement('ALTER TABLE gudang_fabric MODIFY jenis_sparepart_yang_diganti VARCHAR(255) NULL');
        }

        if (Schema::hasColumn('gudang_fabric', 'tanggal_sparepart_diganti')) {
            DB::statement('ALTER TABLE gudang_fabric MODIFY tanggal_sparepart_diganti DATE NULL');
        }

        if (Schema::hasColumn('gudang_fabric', 'harga_sparepart')) {
            DB::statement('ALTER TABLE gudang_fabric MODIFY harga_sparepart DOUBLE(12,12) NULL');
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasColumn('gudang_fabric', 'indikator_mesin')) {
            Schema::table('gudang_fabric', function (Blueprint $table) {
                $table->dropColumn('indikator_mesin');
            });
        }

        if (Schema::hasColumn('gudang_fabric', 'jenis_sparepart_yang_diganti')) {
            DB::statement('ALTER TABLE gudang_fabric MODIFY jenis_sparepart_yang_diganti VARCHAR(255) NOT NULL');
        }

        if (Schema::hasColumn('gudang_fabric', 'tanggal_sparepart_diganti')) {
            DB::statement('ALTER TABLE gudang_fabric MODIFY tanggal_sparepart_diganti DATE NOT NULL');
        }

        if (Schema::hasColumn('gudang_fabric', 'harga_sparepart')) {
            DB::statement('ALTER TABLE gudang_fabric MODIFY harga_sparepart DOUBLE(12,12) NOT NULL');
        }
    }
};
