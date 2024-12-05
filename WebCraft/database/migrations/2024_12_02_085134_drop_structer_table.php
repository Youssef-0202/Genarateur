<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::dropIfExists('structure'); // Remplacez par le nom exact de la table
    }

    /**
     * Restaurer la table en cas de rollback.
     */
    public function down(): void
    {
        Schema::create('model_name', function (Blueprint $table) {
            $table->id();
            $table->text('contenu');
            $table->unsignedBigInteger('template_id');
            $table->timestamps();
            $table->foreign('template_id')->references('id')->on('templates')->onDelete('cascade');
        });
    }
};
