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
        Schema::create('productivities', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->decimal('productivity_salary');
            $table->decimal('daily_productivity',10,2);
            $table->decimal('monthly_productivity',10,2);
            $table->decimal('years_productivity',10,2);
            $table->integer('the_norm');
            $table->decimal('full_productivity_salary',10,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productivities');
    }
};
