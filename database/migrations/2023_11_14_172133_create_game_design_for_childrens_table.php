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
        Schema::create('game_design_for_childrens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('game_id')->constrained(
                table:'games'
            )->onDelete('cascade');
            $table->foreignId('design_id')->constrained(
                table:'design_for_childrens'
            )->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('game_design_for_childrens');
    }
};
