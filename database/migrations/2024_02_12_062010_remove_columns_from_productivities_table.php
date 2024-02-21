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
        Schema::table('productivities', function (Blueprint $table) {
            $table->dropColumn('daily_productivity');
            $table->dropColumn('monthly_productivity');
            $table->dropColumn('years_productivity');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('productivities', function (Blueprint $table) {
            $table->decimal('daily_productivity');
            $table->decimal('monthly_productivity');
            $table->decimal('years_productivity');
        });
    }
};
