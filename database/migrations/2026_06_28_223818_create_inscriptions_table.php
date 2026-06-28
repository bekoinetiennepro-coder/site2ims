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
       Schema::create('inscriptions', function (Blueprint $table) {

        $table->id();

        $table->foreignId('formation_id')
            ->constrained()
            ->cascadeOnDelete();

        $table->enum('type', [
            'Particulier',
            'Entreprise'
        ]);

        // Particulier
        $table->string('nom')->nullable();
        $table->string('prenoms')->nullable();
        $table->string('fonction')->nullable();

        // Entreprise
        $table->string('entreprise')->nullable();
        $table->string('libelle')->nullable();
        $table->integer('nb_personnes')->nullable();

        // Commun
        $table->string('telephone');
        $table->string('email');
        $table->text('message')->nullable();

        $table->enum('statut', [
            'En attente',
            'Validée',
            'Refusée'
        ])->default('En attente');

        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscriptions');
    }
};
