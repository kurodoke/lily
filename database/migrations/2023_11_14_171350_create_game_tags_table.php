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
        Schema::create('game_tags', function (Blueprint $table) {
            $table->id();
            $table->foreignId('game_id')->constrained(
                table:'games'
            );
            $table->foreignId('tag_id')->constrained(
                table:'tags'
            );
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('game_tags');
    }
};
