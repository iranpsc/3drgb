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
            $table->foreignId('category_id')->nullable()->constrained('categories')->nullOnDelete();
            $table->string('sku');
            $table->string('name')->index();
            $table->string('slug')->nullable();
            $table->text('short_description');
            $table->longText('long_description');
            $table->boolean('stock_status')->default(true);
            $table->integer('quantity')->default(0);
            $table->unsignedInteger('delivery_time')->default(0);
            $table->boolean('customer_can_add_review')->default(true);
            $table->unsignedBigInteger('price');
            $table->unsignedBigInteger('sale_price')->nullable();
            $table->boolean('published')->default(false);
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
