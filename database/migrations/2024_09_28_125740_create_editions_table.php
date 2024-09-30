<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('editions', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->string('slug')->unique();
            $table->string('video')->nullable();
            $table->string('image')->nullable();
            $table->string('description')->nullable();
            $table->boolean('is_current')->default(false);
            $table->dateTimeTz('published_at')->nullable();
            $table->dateTimeTz('start_at')->nullable();
            $table->dateTimeTz('end_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('editions');
    }
};
