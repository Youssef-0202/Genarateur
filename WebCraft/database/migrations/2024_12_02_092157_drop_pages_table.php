<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Supprimer les contraintes de clé étrangère avant de supprimer la table
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('pages');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }

    public function down(): void
    {
        // Recréer la table pages si nécessaire (rollback)
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->integer('ordre');
            $table->string('slug');
            $table->string('type');
            $table->text('contenu')->nullable();
            $table->unsignedBigInteger('website_id');
            $table->timestamps();

            $table->foreign('website_id')->references('id')->on('websites')->onDelete('cascade');
        });
    } 
        
};
