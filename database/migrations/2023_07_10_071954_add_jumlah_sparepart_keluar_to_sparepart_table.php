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
        Schema::table('sparepart', function (Blueprint $table) {
            $table->string('jumlah_sparepart_keluar')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sparepart', function (Blueprint $table) {
            $table->dropColumn('jumlah_sparepart_keluar')->nullable();
        });
    }
};
