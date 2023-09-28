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
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('status')->default('0');
            $table->string('image');
            $table->string('name');
            $table->integer('price');
            $table->tinyInteger('category');
            $table->tinyInteger('attribute');
            $table->longText('description');
            $table->string('meta_description');
            $table->integer('sale');
            $table->date('sale_date');
            $table->integer('stock');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
