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
        Schema::table('cutter_pattern_check', function (Blueprint $table) {
            $table->string('id_sparepart')->nullable();
            $table->double('harga_sparepart')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cutter_pattern_check', function (Blueprint $table) {
            $table->dropColumn('id_sparepart')->nullable();
            $table->dropColumn('harga_sparepart')->nullable();
        });
    }
};
