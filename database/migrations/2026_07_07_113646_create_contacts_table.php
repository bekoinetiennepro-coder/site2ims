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
        Schema::create('contacts', function (Blueprint $table) {
           $table->id();

            $table->string('nom');

            $table->string('entreprise')->nullable();

            $table->string('telephone')->nullable();

            $table->string('email');

            $table->string('service')->nullable();

            $table->longText('message');

            $table->enum('statut',[
                'Non lu',
                'Lu',
                'Traité'
            ])->default('Non lu');

            $table->timestamps();
                });
            }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
