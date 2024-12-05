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
        Schema::create('cutis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pekerjas')->constrained('pekerjas')->onDelete('cascade');
            $table->year('tahun');
            $table->string('jenis_cuti');
            $table->integer('jum_cutibersalin');
            $table->date('date_mulacuti');
            $table->date('date_tamatcuti');
            $table->integer('jumcuti');
            $table->integer('bil_cutidipohon');
            $table->integer('bakicuti');
            $table->integer('bakikehadapan');
            $table->string('status_permohonan');
            $table->string('dokumen')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cutis');
    }
};
