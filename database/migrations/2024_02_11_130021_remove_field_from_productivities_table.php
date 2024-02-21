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
            $table->dropColumn('productivity_salary');
            $table->dropColumn('the_norm');
            $table->dropColumn('full_productivity_salary');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('productivities', function (Blueprint $table) {
            $table->decimal('productivity_salary');
            $table->integer('the_norm');
            $table->decimal('full_productivity_salary');
        });
    }
};
