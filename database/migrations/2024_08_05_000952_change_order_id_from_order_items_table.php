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
        // Drop foreign key constraints
        Schema::table('order_items', function (Blueprint $table) {
            $table->dropForeign(['order_id']);
        });

        Schema::table('transactions', function (Blueprint $table) {
            $table->dropForeign(['order_id']);
        });

        // Change the id column in orders table
        Schema::table('orders', function (Blueprint $table) {
            $table->uuid('id')->change();
        });

        // Change the order_id columns in order_items and transactions tables
        Schema::table('order_items', function (Blueprint $table) {
            $table->uuid('order_id')->change();
        });

        Schema::table('transactions', function (Blueprint $table) {
            $table->uuid('order_id')->change();
        });

        // Recreate foreign key constraints
        Schema::table('order_items', function (Blueprint $table) {
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
        });

        Schema::table('transactions', function (Blueprint $table) {
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop foreign key constraints
        Schema::table('order_items', function (Blueprint $table) {
            $table->dropForeign(['order_id']);
        });

        Schema::table('transactions', function (Blueprint $table) {
            $table->dropForeign(['order_id']);
        });

        // Revert the id column in orders table
        Schema::table('orders', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->primary()->change();
        });

        // Revert the order_id columns in order_items and transactions tables
        Schema::table('order_items', function (Blueprint $table) {
            $table->unsignedBigInteger('order_id')->change();
        });

        Schema::table('transactions', function (Blueprint $table) {
            $table->unsignedBigInteger('order_id')->change();
        });

        // Recreate foreign key constraints
        Schema::table('order_items', function (Blueprint $table) {
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
        });

        Schema::table('transactions', function (Blueprint $table) {
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
        });
    }
};
