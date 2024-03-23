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
            $table->dropColumn('point');
            $table->dropColumn('full_sum');
            $table->dropColumn('sum_papers');
            $table->dropColumn('sum_boxes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('productivities', function (Blueprint $table) {
            $table->decimal('point');
            $table->decimal('full_sum');
            $table->decimal('sum_papers');
            $table->decimal('sum_boxes');
        });
    }
};
