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
        Schema::create('pilih_assesors', function (Blueprint $table) {
            $table->id();
            $table->string('id_assesor');
            $table->string('nama_siswa');
            $table->date('tanggal');
            $table->string('ttd_assesor');
            $table->integer('nik');
            $table->integer('status_kompeten');
            $table->integer('status_konfirmasi');
            $table->integer('status_penilaian');
            $table->timestamps();

            $table->foreign('nik')->references('nik')->on('siswas');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pilih_assesors');
    }
};
