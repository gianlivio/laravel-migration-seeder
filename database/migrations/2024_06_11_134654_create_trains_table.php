<!-- traduzione SQL -->


<!-- CREATE TABLE trains (
        id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        company VARCHAR(255) NOT NULL,
        departure VARCHAR(255) NOT NULL,
        arrival VARCHAR(255) NOT NULL,
        departure_time TIME NOT NULL,
        arrival_time TIME NOT NULL,
        train_code VARCHAR(255) NOT NULL,
        carriages_number INT NOT NULL,
        on_time BOOLEAN NOT NULL,
        cancelled BOOLEAN NOT NULL,
    ); -->



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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company');
            $table->string('departure_station');
            $table->string('arrival_station');
            $table->time('departure_time'); 
            $table->time('arrival_time'); 
            $table->string('train_code'); 
            $table->integer('carriages_number'); 
            $table->boolean('on_time'); 
            $table->boolean('cancelled'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
