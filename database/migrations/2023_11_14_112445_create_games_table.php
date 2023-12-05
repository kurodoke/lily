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
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('author');
            $table->foreignId('age_id')->constrained(
                table: 'Children_ages'
            )->onDelete('cascade');
            $table->integer('score');
            $table->integer('size');
            $table->string('download');
            $table->string('description');
            $table->string('logo_filename');
            $table->timestamps();

            $table->unique(['name', 'author']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
