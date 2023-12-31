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
            $table->integer('score');
            $table->string('url');
            $table->integer('size');
            $table->string('download');
            $table->longText('description');
            $table->string('logo_filename');
            $table->enum('premium', ['Paid', 'Free-to-Play']);
            $table->integer('price')->nullable();
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
