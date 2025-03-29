<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Movie title
            $table->string('genre'); // Movie genre
            $table->string('type'); // Movie type (e.g., Action, Comedy, etc.)
            $table->date('released_date'); // Release date of the movie
            $table->string('image')->nullable(); // Image field to store image URL or path (nullable for optional images)
            $table->timestamps(); // For created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('movies'); // Drop the 'movies' table if this migration is rolled back
    }
};
