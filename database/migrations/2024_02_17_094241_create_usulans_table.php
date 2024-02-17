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
        Schema::create('usulan', function (Blueprint $table) {
            $table->id();
            $table->string('ketua');
            $table->string('judul');
            $table->string('bidang_fokus');
            $table->integer('tahun_pelaksanaan')->unsigned();
            $table->string('peran');
            $table->enum('status', ['seleksi', 'pelaksanaan', 'seleksi-lanjutan', 'pasca-pelaksanaan']);
            $table->enum('type', ['penelitian', 'pengabdian', 'kosabangsa', 'prototipe']);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usulans');
    }
};
