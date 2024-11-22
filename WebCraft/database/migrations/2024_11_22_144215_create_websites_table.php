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
        Schema::create('websites', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('titre');
            $table->string('url');
            $table->date('date_creation');
            $table->string('statut_publication');
            $table->string('theme');
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Foreign Key to users table
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('websites');
    }
};
