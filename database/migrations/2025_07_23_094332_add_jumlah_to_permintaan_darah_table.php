<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::table('permintaan_darah', function (Blueprint $table) {
            $table->integer('jumlah')->default(1); // default 1 kantong
        });
    }

    public function down(): void {
        Schema::table('permintaan_darah', function (Blueprint $table) {
            $table->dropColumn('jumlah');
        });
    }
};
