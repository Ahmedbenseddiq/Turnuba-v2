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
        Schema::create('chairs', function (Blueprint $table) {
            $table->id();
            $table->integer('number')->unique();
            $table->boolean('is_occupied')->default(false); 
            $table->time('avg_time')->nullable();
            $table->foreignId('barber_id')->constrained('barbers')->nullable();
            $table->foreignId('barberShop_id')->constrained('barber_shops')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chairs');
    }
};
