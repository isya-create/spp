<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasangansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasangans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pekerja');
            $table->string('nricpasangan');
            $table->string('namapasangan');
            $table->string('hubungan');
            $table->string('notel');
            $table->timestamps();
            $table->softDeletes();

            // Foreign key constraint
            $table->foreign('id_pekerja')->references('id')->on('pekerjas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pasangans');
    }
}