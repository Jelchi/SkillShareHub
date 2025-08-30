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
        Schema::create('achievement_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('achievement_id')->constrained('achievements')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->timestamp('earned_at')->useCurrent(); // Otomatis diisi saat data dibuat
            $table->timestamps();
            // Opsional: Mencegah duplikat user & achievement yang sama
            $table->unique(['achievement_id', 'user_id']);
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('achievement_user');
    }
};
