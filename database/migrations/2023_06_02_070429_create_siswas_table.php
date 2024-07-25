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
        Schema::create('siswas', function (Blueprint $table) {
            $table->integer('nik')->primary();
            $table->string('nama');
            $table->string('ttl');
            $table->string('jk');
            $table->string('kebangsaan');
            $table->string('alamat');
            $table->string('kode_pos');
            $table->string('no_rumah');
            $table->string('no_hp');
            $table->string('no_kantor');
            $table->string('email');
            $table->string('kualifikasi_pendidikan');
            $table->string('perusahaan');
            $table->string('jabatan');
            $table->string('alamat_rumah');
            $table->string('no_telp');
            $table->string('email_pekerjaan');
            $table->string('kodepos_pekerjaan');
            $table->string('bukti_syarat');
            $table->string('fax');
            $table->string('ttd_siswa');
            $table->string('ttd_admin');
            $table->integer('status_konfirmasi');
            $table->integer('user_id');

            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

        /**
         * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
