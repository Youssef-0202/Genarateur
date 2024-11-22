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
        Schema::create('components', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->integer('ordre');
            $table->string('type');
            $table->text('contenu');
            $table->string('style');
            $table->foreignId('page_id')->constrained()->onDelete('cascade'); // Foreign Key to pages table
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('components');
    }
};
