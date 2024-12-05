<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::dropIfExists('csses'); // Vérifiez le nom exact de la table (généralement "csses" pour Laravel)
    }

    /**
     * Restaure la table en cas de rollback.
     */
    public function down(): void
    {
        Schema::create('csses', function (Blueprint $table) {
            $table->id();
            $table->text('regles_css')->nullable();
            $table->unsignedBigInteger('template_id');
            $table->timestamps();

            $table->foreign('template_id')->references('id')->on('templates')->onDelete('cascade');
        });
    }
};
