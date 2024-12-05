<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Reverse the migrations.
     */
    public function up(): void
    {
        Schema::dropIfExists('user_settings');
    }

    /**
     * Reverse the drop in case of rollback.
     */
    public function down(): void
    {
        Schema::create('user_settings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->text('preferences')->nullable();
            $table->boolean('notifications')->default(true);
            $table->text('historique')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }
};
