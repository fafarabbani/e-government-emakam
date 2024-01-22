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
        Schema::create('form_pelaporans', function (Blueprint $table) {
            $table->id();
            $table->enum('form_kec', ['Batam Kota', 'Batu aji', 'Batu ampar', 'Belakang padang', 'Bengkong', 'Bulang', 'Galang', 'Lubuk Baja', 'Nongsa', 'Sagulung', 'Sei Beduk', 'Sekupang'])->nullable();
            $table->string('nik_kk')->nullable();
            $table->string('nama_kk')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('jenazah_id');
            $table->unsignedBigInteger('pelapor_id');
            $table->unsignedBigInteger('saksi_id');
            $table->string('status_pelaporan')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('jenazah_id')->references('id')->on('jenazahs')->onDelete('cascade');
            $table->foreign('pelapor_id')->references('id')->on('pelapors')->onDelete('cascade');
            $table->foreign('saksi_id')->references('id')->on('saksis')->onDelete('cascade');
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
        Schema::dropIfExists('form_pelaporans');
    }
};
