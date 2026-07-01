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
        Schema::create('rendez_vous', function (Blueprint $table) {

            $table->id();

            $table->string('nom');

            $table->string('telephone');

            $table->string('email');

            $table->string('entreprise')->nullable();

            $table->string('service');

            $table->date('date_rdv');

            $table->time('heure_rdv');

            $table->text('message')->nullable();

            $table->enum('statut', [
                'en_attente',
                'confirme',
                'termine',
                'annule'
            ])->default('en_attente');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rendez_vouses');
    }
};
