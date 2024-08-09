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
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->longtext('libelle');
            
            $table->foreignId('categorie_id')->constrained('categories')->cascadeOnDelete();
            $table->longText('description');

            $table->decimal('prix',10,2);
            $table->integer('qttestock');

            $table->boolean('is_active')->default(true);
            $table->boolean('in_stock')->default(true);
            $table->boolean('on_sale')->default(false);
            $table->boolean('is_featured')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produits');
    }
};
