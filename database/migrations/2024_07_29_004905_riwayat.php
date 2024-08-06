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
            $table->integerIncrements('id_riwayat')->primary;
            $table->unsignedInteger('id_guru');
            $table->unsignedInteger('id_mapel');
            $table->string('type', 15);
            $table->string('kelas', 10);
            $table->string('rombel', 25);
            $table->string('alokasi_jp', 5);
            $table->string('total_jp', 10);
            $table->foreign('id_guru')->references('id_guru')->on('guru')->onDelete('cascade');
            $table->foreign('id_mapel')->references('id_mapel')->on('mata_pelajaran')->onDelete('cascade');
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
