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
            $table->string('name');
            $table->string('email');
            $table->string('blood_type');
            $table->string('phone');
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
