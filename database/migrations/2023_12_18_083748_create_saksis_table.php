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
        Schema::create('saksis', function (Blueprint $table) {
            $table->id();
            $table->string('nik_saksi')->nullable();
            $table->string('nama_saksi')->nullable();
            $table->date('tglahir_saksi')->nullable();
            $table->integer('umur_saksi')->nullable();
            $table->string('pkerjaan_saksi')->nullable();
            $table->longtext('alamat_saksi')->nullable();
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
        Schema::dropIfExists('saksis');
    }
};
