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
        Schema::table('usulan', function (Blueprint $table) {
            $table->timestamp('tanggal_pelaksanaan')->nullable()->after('status');
            $table->timestamp('tanggal_seleksi_lanjutan')->nullable()->after('tanggal_pelaksanaan');
            $table->timestamp('tanggal_pasca_pelaksanaan')->nullable()->after('tanggal_seleksi_lanjutan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('usulan', function (Blueprint $table) {
            //
        });
    }
};
