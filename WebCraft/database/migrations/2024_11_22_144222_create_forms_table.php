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
        Schema::create('forms', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->foreignId('component_id')->constrained()->onDelete('cascade'); // Foreign Key to components table
            $table->text('contenu'); // Form Content
            $table->json('champs'); // JSON Field for Form Fields
            $table->string('style');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forms');
    }
};
