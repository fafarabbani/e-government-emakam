<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelapors', function (Blueprint $table) {
            $table->id();
            $table->string('nik_plapor')->nullable();
            $table->string('nama_plapor')->nullable();
            $table->date('tglahir_plapor')->nullable();
            $table->integer('umur_plapor')->nullable();
            $table->string('pkerjaan_plapor')->nullable();
            $table->longtext('alamat_plapor')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelapors');
    }
};
