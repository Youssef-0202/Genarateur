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
        Schema::create('pages', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('nom');
            $table->integer('ordre');
            $table->string('slug');
            $table->string('type');
            $table->text('contenu');
            $table->foreignId('website_id')->constrained()->onDelete('cascade'); // Foreign Key to websites table
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
