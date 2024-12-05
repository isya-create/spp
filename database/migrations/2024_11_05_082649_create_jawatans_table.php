<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJawatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawatans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pekerja');
            $table->date('date_lapordiri');
            $table->date('date_tempohcubaan');
            $table->unsignedBigInteger('id_departments');
            $table->string('jawatan');
            $table->decimal('salary', 8, 2);
            $table->unsignedBigInteger('id_banks');
            $table->string('noakaun');
            $table->string('noepf');
            $table->string('nosocso');
            $table->integer('jumlahcuti');
            $table->timestamps();
            $table->softDeletes();

            // Foreign key constraints
            $table->foreign('id_pekerja')->references('id')->on('pekerjas')->onDelete('cascade');
            $table->foreign('id_departments')->references('id')->on('departments')->onDelete('cascade');
            $table->foreign('id_banks')->references('id')->on('banks')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jawatans');
    }
}
