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
        Schema::table('transactions', function (Blueprint $table) {
            $table->renameColumn('authority', 'token');
            $table->dropColumn(['currency', 'fee_type', 'fee', 'card_pan']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('transactions', function (Blueprint $table) {
            $table->renameColumn('token', 'authority');
            $table->string('currency')->after('authority');
            $table->string('card_pan')->after('card_hash');
            $table->string('fee_type')->after('card_pan');
            $table->integer('fee')->after('fee_type');
        });
    }
};
