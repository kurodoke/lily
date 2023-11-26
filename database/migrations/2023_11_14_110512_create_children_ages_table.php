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
        Schema::create('children_ages', function (Blueprint $table) {
            $table->id();
            $table->integer('age_min');
            $table->integer('age_max');
            $table->timestamps();
            
            $table->unique(['age_min', 'age_max']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('children_ages');
    }
};
