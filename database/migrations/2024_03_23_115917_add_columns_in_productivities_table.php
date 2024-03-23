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
            $table->decimal('sum_papers',10,2)->default('0');
            $table->decimal('sum_boxes',10,2)->default('0');
            $table->integer('point')->default('0');
            $table->decimal('full_sum',10,2)->default('0');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('productivities', function (Blueprint $table) {
            $table->dropColumn('sum_papers');
            $table->dropColumn('sum_boxes');
            $table->dropColumn('point');
            $table->dropColumn('full_sum');
        });
    }
};
