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
        Schema::create('riwayat', function (Blueprint $table) {
            $table->integerIncrements('id_riwayat')->primary();
            $table->integer('id_guru')->reference('id_guru')->on('guru');
            $table->integer('id_mapel')->reference('id_mapel')->on('mata_pelajaran');
            $table->string('type', 15);
            $table->string('kelas', 10);
            $table->string('rombel', 25);
            $table->string('alokasi_jp', 5);
            $table->string('total_jp', 10);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
