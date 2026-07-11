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
        Schema::create('formations', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->foreignId('categorie_id')
              ->nullable()
              ->constrained('categories')
              ->cascadeOnDelete();
            $table->text('description');
            $table->string('image')->nullable();
            $table->decimal('prix', 10, 2);
            $table->integer('duree');
            $table->boolean('phare')->default(false);
            $table->string('slug')->unique();
            $table->longText('programme')->nullable();
            $table->string('brochure')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formations');
    }
};
