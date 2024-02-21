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
            $table->integer('the_norm_of_papers')->default(53);
            $table->integer('the_norm_of_boxes')->default(1260);
            $table->integer('daily_of_papers')->default(0);
            $table->integer('daily_of_boxes')->default(0);
            

            $table->unsignedBigInteger('employee_id');
            $table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('productivities', function (Blueprint $table) {
            $table->dropColumn('the_norm_of_papers');
            $table->dropColumn('the_norm_of_boxes');
            $table->dropColumn('employee_id');
            $table->dropColumn('daily_of_papers');
            $table->dropColumn('daily_of_boxes');
        });
    }
};
