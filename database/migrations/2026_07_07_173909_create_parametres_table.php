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
        Schema::create('parametres', function (Blueprint $table) {
            $table->id();

            $table->string('adresse');

            $table->string('telephone');

            $table->string('email');

            $table->string('email_support')->nullable();

            $table->string('facebook')->nullable();

            $table->string('linkedin')->nullable();

            $table->string('whatsapp')->nullable();

            $table->text('google_maps')->nullable();

            $table->text('horaire')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parametres');
    }
};
