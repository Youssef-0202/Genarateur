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
        Schema::dropIfExists('structures');
    }

    public function down()
    {
        // Si vous souhaitez recréer la table, vous pouvez le faire ici
        Schema::create('structures', function (Blueprint $table) {
            $table->id();
            $table->text('contenu');
            $table->unsignedBigInteger('template_id');
            $table->timestamps();

            // Définir la clé étrangère si nécessaire
            $table->foreign('template_id')->references('id')->on('templates')->onDelete('cascade');
        });
    }
};
