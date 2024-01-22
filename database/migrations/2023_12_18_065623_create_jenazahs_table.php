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
        Schema::create('jenazahs', function (Blueprint $table) {
            $table->id();
            $table->string('nik_jz')->nullable();
            $table->string('nama_jz')->nullable();
            $table->enum('jeniskelamin_jz', ['Laki laki', 'Perempuan'])->nullable();
            $table->string('tmptlahir_jz')->nullable();
            $table->date('tglahir_jz')->nullable();
            $table->integer('umur_jz')->nullable();
            $table->enum('agama_jz', ['Islam', 'Kristen', 'Katolik', 'Hindu', 'Budha', 'Khonghucu'])->nullable();
            $table->string('pkerjaan_jz')->nullable();
            $table->longtext('alamat_jz')->nullable();
            $table->string('tmptkematian_jz')->nullable();
            $table->date('tglkematian_jz')->nullable();
            $table->time('jamkematian_jz')->nullable();
            $table->enum('sebabkematian_jz', ['Sakit biasa / Tua', 'Wabah Penyakit', 'Kecelakaan', 'Kriminalitas', 'Bunuh Diri'])->nullable();
            $table->enum('yang_menerangkan', ['Dokter', 'Tenaga Kesehatan', 'Kepolisian'])->nullable();

            $table->string('nik_ayah')->nullable();
            $table->string('nama_ayah')->nullable();
            $table->date('tglahir_ayah')->nullable();
            $table->integer('umur_ayah')->nullable();
            $table->string('pkerjaan_ayah')->nullable();

            $table->string('nik_ibu')->nullable();
            $table->string('nama_ibu')->nullable();
            $table->date('tglahir_ibu')->nullable();
            $table->integer('umur_ibu')->nullable();
            $table->string('pkerjaan_ibu')->nullable();
            $table->longtext('alamat_orgtua')->nullable();
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
        Schema::dropIfExists('jenazahs');
    }
};
