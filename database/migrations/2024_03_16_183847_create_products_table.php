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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('short_detail', 100);
            $table->text('complete_detail');
            $table->string('fabric_made');
            $table->string('size');
            $table->json('colors');
            $table->unsignedInteger('stock')->default(1)->nullable();
            $table->string('category');
            $table->decimal('old_price', 8, 2);
            $table->decimal('current_price', 8, 2);
            $table->decimal('discount', 5, 2); // Allows for discounts with decimals up to 2 digits
            $table->string('offer')->nullable();;
            $table->string('width');
            $table->string('length');
            $table->tinyInteger('delivery')->default(0);
            $table->boolean('main_img');
            $table->text('detail_imgs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
