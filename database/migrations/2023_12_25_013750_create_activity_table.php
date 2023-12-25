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
        Schema::create('activity', function (Blueprint $table) {
            $table->id();
            
            // Foreign key ke tabel operators
            $table->unsignedBigInteger('operator_id');
            $table->foreign('operator_id')->references('id')->on('operators')->onDelete('cascade');

            // Foreign key ke tabel ultrasonic
            $table->unsignedBigInteger('ultrasonic_id');
            $table->foreign('ultrasonic_id')->references('id')->on('ultrasonics')->onDelete('cascade');

            $table->unsignedBigInteger('conveyor_id');
            $table->foreign('conveyor_id')->references('id')->on('conveyors')->onDelete('cascade');

            $table->string('nama');
            $table->string('status');
            $table->string('lokasi');
            $table->date('activity_date')->nullable();
            $table->integer('duration')->nullable();
            $table->integer('batch')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activity');
    }
};
