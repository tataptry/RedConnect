<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendonorTable extends Migration
{
    public function up()
    {
        Schema::create('pendonor', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('umur');
            $table->string('jenis_kelamin');
            $table->string('no_hp');
            $table->string('golongan_darah');
            $table->string('riwayat_penyakit');
            $table->string('pernah_donor');
          
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendonor');
    }
};