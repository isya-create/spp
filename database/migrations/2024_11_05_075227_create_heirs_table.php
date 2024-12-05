<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('heirs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pekerja');
            $table->string('namawaris');
            $table->text('alamat');
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
        Schema::dropIfExists('heirs');
    }
}