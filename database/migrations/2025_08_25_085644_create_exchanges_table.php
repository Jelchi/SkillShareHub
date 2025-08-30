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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            // Foreign key untuk penjual (user)          
            $table->foreignId('penjual_id')->constrained('users')->onDelete('cascade');
            // Foreign key untuk pembeli (user)          
            $table->foreignId('pembeli_id')->constrained('users')->onDelete('cascade');
            // Foreign key untuk skill yang dibeli          
            $table->foreignId('skill_id')->constrained('skills')->onDelete('cascade');
            $table->enum('status', ['belum selesai', 'selesai', 'batal']);
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
