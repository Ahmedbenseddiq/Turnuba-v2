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
        Schema::create('resrvations', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_confirmed')->default(false);
            $table->boolean('is_canceled')->default(false);
            $table->boolean('is_done')->default(false);
            $table->foreignId('client_id')->constrained('clients')->onDelete('cascade');
            $table->foreignId('chair_id')->constrained('chairs')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resrvations');
    }
};
