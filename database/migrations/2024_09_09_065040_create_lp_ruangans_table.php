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
        Schema::create('lp_ruangans', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('id_peminjaman')->unsigned();
            $table->string('keterangan');
            $table->foreign('id_peminjaman')->references('id')->on('pm_ruangans')->ondelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lp_ruangans');
    }
};
