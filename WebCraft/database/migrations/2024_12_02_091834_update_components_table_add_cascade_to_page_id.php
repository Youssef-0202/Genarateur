<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
     /**
     * Modifie la clé étrangère pour activer la suppression en cascade.
     */
    public function up(): void
    {
        Schema::table('components', function (Blueprint $table) {
            $table->dropForeign(['page_id']); // Supprime l'ancienne contrainte
            $table->foreign('page_id')->references('id')->on('pages')->onDelete('cascade');
        });
    }

    /**
     * Restaurer la configuration précédente en cas de rollback.
     */
    public function down(): void
    {
        Schema::table('components', function (Blueprint $table) {
            $table->dropForeign(['page_id']); // Supprime la contrainte avec cascade
            $table->foreign('page_id')->references('id')->on('pages'); // Sans cascade
        });
    }
};
