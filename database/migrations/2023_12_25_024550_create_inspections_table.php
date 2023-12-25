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
        Schema::create('inspections', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('activity_id');
            $table->foreign('activity_id')->references('id')->on('activity')->onDelete('cascade');

            $table->unsignedBigInteger('aluminium_id');
            $table->foreign('aluminium_id')->references('id')->on('aluminiums')->onDelete('cascade');

            $table->string('action');
            $table->string('quality');
            $table->string('keterangan');
            $table->timestamp('time', $precision = 0);
            $table->float('diameter')->nullable();
            $table->float('berat')->nullable();
            $table->float('lebar')->nullable();
            $table->float('panjang')->nullable();
            $table->float('tinggi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inspections');
    }
};
