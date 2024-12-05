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
        Schema::create('gestionnaire_de_contenu', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('template_id'); // Clé étrangère vers Template
            $table->unsignedBigInteger('component_id'); // Clé étrangère vers Component
            $table->string('nom')->nullable();
            $table->integer('ordre')->nullable();
            $table->string('slug')->nullable();
            $table->string('type')->nullable();
            $table->text('contenu')->nullable();
            $table->timestamps();

            // Définir les relations entre les tables
            $table->foreign('template_id')->references('id')->on('templates')->onDelete('cascade');
            $table->foreign('component_id')->references('id')->on('components')->onDelete('cascade');
        });
    }

    /**
     * Supprimer la table GestionnaireDeContenu.
     */
    public function down(): void
    {
        Schema::dropIfExists('gestionnaire_de_contenu');
    }
};
