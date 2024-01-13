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
        Schema::table('users', function (Blueprint $table) {
            $table->text('access_token')->nullable();
            $table->text('refresh_token')->nullable();
            $table->string('expires_in')->nullable();
            $table->string('token_type')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'access_token',
                'refresh_token',
                'expires_in',
                'token_type',
            ]);
        });
    }
};
