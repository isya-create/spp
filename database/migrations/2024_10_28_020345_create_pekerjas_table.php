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
        Schema::create('pekerjas', function (Blueprint $table) {
            $table->id();
            $table->string('nric');
            $table->string('employeeID');
            $table->string('nama');
            $table->text('alamat');
            $table->string('jantina');
            $table->date('tarikhlahir');
            $table->string('agama');
            $table->string('bangsa');
            $table->string('kewarganegaraan');
            $table->string('statusperkahwinan');
            $table->string('notel');
            $table->string('email');
            $table->string('status');
            $table->timestamps();
            $table->softDeletes();                
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pekerjas');
    }
};
